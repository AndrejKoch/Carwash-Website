<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::all();
        $data = ["settings" => $settings];
        return view('settings.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = Settings::all();
        $data = ['settings' => $settings];
        return view('settings.create')->with($data);
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

        ]);

        if ($validator->fails()) {
            return redirect('settings/create')
                ->withErrors($validator)
                ->withInput();
        }

        $logo = $this->imageStore($request);


        $settings = new Settings();
        $settings->title = $request->title;
        $settings->mainurl = $request->mainurl;
        $settings->email = $request->email;
        $settings->link = $request->link;
        $settings->address = $request->address;
        $settings->logo = $logo;
        $settings->description = $request->description;
        $settings->phone = $request->phone;
        $settings->mobilephone = $request->mobilephone;
        $settings->ctitle1 = $request->ctitle1;
        $settings->calttitle1 = $request->calttitle1;
        $settings->ctitle2 = $request->ctitle2;
        $settings->calttitle2 = $request->calttitle2;
        $settings->ctitle3 = $request->ctitle3;
        $settings->calttitle3 = $request->calttitle3;
        $settings->ctitle4 = $request->ctitle4;
        $settings->calttitle4 = $request->calttitle4;
        $settings->ctitle5 = $request->ctitle5;
        $settings->calttitle5 = $request->calttitle5;
        $settings->ctitle6 = $request->ctitle6;
        $settings->calttitle6 = $request->calttitle6;
        $settings->facebook = $request->facebook;
        $settings->lat = $request->lat;
        $settings->lng = $request->lng;
        $settings->save();

        Session::flash('flash_message', 'Settings successfully created!');
        return redirect()->back();}
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
        $settings = Settings::FindOrFail($id);
        $data = ["settings" => $settings];
        return view('settings.edit')->with($data);
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

        $settings = Settings::FindOrFail($id);
        $input = $request->all();
        if ($request->hasFile('image')){
            unlink(public_path().'/assets/img/logo/medium/'.$settings->logo);
            unlink(public_path().'/assets/img/logo/originals/'.$settings->logo);
            unlink(public_path().'/assets/img/logo/thumbnails/'.$settings->logo);

            $input['logo'] = $this->imageStore($request);

        }

        $settings->fill($input)->save();

        Session::flash('flash_message', 'Settings successfully updated!');
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
        //
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

        $original = public_path() . '/assets/img/logo/originals/';;
        $thumbnail = public_path() . '/assets/img/logo/thumbnails/';
        $medium = public_path() . '/assets/img/logo/medium/';
        $paths = (object)compact('original', 'thumbnail', 'medium');
        return $paths;
    }
}
