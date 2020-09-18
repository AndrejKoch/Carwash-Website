<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $data = ["products" => $products];
        return view('products.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Products::all();
        $data = ['products' => $products];
        return view('products.create')->with($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('products/create')
                ->withErrors($validator)
                ->withInput();
        }


        $slug = Str::slug($request->get('name'), '_');
        $image = $this->imageStore($request);


        $products = new Products();
        $products->name = $request->name;
        $products->description = $request->description;
        $products->image = $image;
        $products->save();

        Session::flash('flash_message', 'Products successfully created!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::FindOrFail($id);
        $data = ["products" => $products];

        return view('products.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Products::FindOrFail($id);
        $input = $request->all();
        if ($request->hasFile('image')){
            unlink(public_path().'/assets/img/products/medium/'.$products->image);
            unlink(public_path().'/assets/img/products/originals/'.$products->image);
            unlink(public_path().'/assets/img/products/thumbnails/'.$products->image);

            $input['image'] = $this->imageStore($request);
        }
        $products->fill($input)->save();

        Session::flash('flash_message', 'Products successfully updated!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::FindOrFail($id);



        unlink(public_path().'/assets/img/products/medium/'.$products->image);
        unlink(public_path().'/assets/img/products/originals/'.$products->image);
        unlink(public_path().'/assets/img/products/thumbnails/'.$products->image);
        $products->delete();

        Session::flash('flash_message', 'Product successfully deleted!');
        return redirect()->back();
    }

    public function imageStore(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $paths = $this->makePaths();
            File::makeDirectory($paths->original, $mode = 0755, true, true);
            File::makeDirectory($paths->thumbnail, $mode = 0755, true, true);
            File::makeDirectory($paths->medium, $mode = 0755, true, true);
            $image->move($paths->original, $imageName);
            $findimage = $paths->original . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imagethumb->save($paths->thumbnail . $imageName);
            $imagemedium->save($paths->medium . $imageName);


            return $imageName;
        }

    }

    public function makePaths()
    {

        $original = public_path() . '/assets/img/products/originals/';;
        $thumbnail = public_path() . '/assets/img/products/thumbnails/';
        $medium = public_path() . '/assets/img/products/medium/';
        $paths = (object)compact('original', 'thumbnail', 'medium');
        return $paths;
    }
}
