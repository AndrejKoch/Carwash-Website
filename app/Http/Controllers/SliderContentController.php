<?php

namespace App\Http\Controllers;

use App\SliderContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;


class SliderContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slidercontent = SliderContent::all();
        $data = ["slidercontent" => $slidercontent];
        return view('slidercontent.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slidercontent.create');

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
            'title' => 'required|max:255',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('slidercontent/create')
                ->withErrors($validator)
                ->withInput();
        }



        $image = $this->imageStore($request);
        $description = $request->description;
        $title = $request->title;

        $slider = new SliderContent();
        $slider->title = $title;
        $slider->image = $image;
        $slider->description = $description;
        $slider->save();


        Session::flash('flash_message', 'Content Slider successfully created!');
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
        $slidercontent = SliderContent::FindOrFail($id);
        $data = ["slidercontent" => $slidercontent];
        return view('slidercontent.edit')->with($data);
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
        $slidercontent = SliderContent::FindOrFail($id);
        if($request->hasFile('image'))
        {

            unlink(public_path().'/assets/img/slidercontent/medium/'.$slidercontent->image);
            unlink(public_path().'/assets/img/slidercontent/originals/'.$slidercontent->image);
            unlink(public_path().'/assets/img/slidercontent/thumbnails/'.$slidercontent->image);

            $image = $this->imageStore($request);
            $slidercontent->title = $request->get('title');
            $slidercontent->image = $image;
            $slidercontent->description = $request->get('description');
            $slidercontent->save();

        }
        else {
            $slidercontent->title = $request->get('title');
            $slidercontent->description = $request->get('description');
            $slidercontent->save();
        }

        Session::flash('flash_message', 'Content Slider successfully updated!');
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
        $slidercontent = SliderContent::FindOrFail($id);



        unlink(public_path().'/assets/img/slidercontent/medium/'.$slidercontent->image);
        unlink(public_path().'/assets/img/slidercontent/originals/'.$slidercontent->image);
        unlink(public_path().'/assets/img/slidercontent/thumbnails/'.$slidercontent->image);
        $slidercontent->delete();

        Session::flash('flash_message', 'Slider successfully deleted!');
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

        $original = public_path() . '/assets/img/slidercontent/originals/';;
        $thumbnail = public_path() . '/assets/img/slidercontent/thumbnails/';
        $medium = public_path() . '/assets/img/slidercontent/medium/';
        $paths = (object)compact('original', 'thumbnail', 'medium');
        return $paths;
    }
}
