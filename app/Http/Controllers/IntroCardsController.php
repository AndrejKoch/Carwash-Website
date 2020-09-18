<?php

namespace App\Http\Controllers;

use App\IntroCards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class IntroCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $introcards = IntroCards::all();
        $data =['introcards'=>$introcards];
        return view('introcards.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('introcards.create');
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
            'description' => 'required',
            'icon'=>'required'

            ]);

        if ($validator->fails()) {
            return redirect('introcards/create')
                ->withErrors($validator)
                ->withInput();
        }

        $title = $request->title;
        $description = $request->description;
        $icon = $request->icon;

        $introcards = new IntroCards();
        $introcards->title = $title;
        $introcards->description = $description;
        $introcards->icon = $icon;
        $introcards->save();

        Session::flash('flash_message', 'Intro Card successfully created!');
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
        $introcards = IntroCards::FindOrFail($id);
        $data = ["introcards" => $introcards];

        return view('introcards.edit')->with($data);
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
        $introcards = IntroCards::FindOrFail($id);
        $input = $request->all();
        $introcards->fill($input)->save();

        Session::flash('flash_message', 'Intro Card successfully updated!');
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
        $introcards = IntroCards::FindOrFail($id);
        $introcards->delete;
        Session::flash('flash_message', 'Intro Card successfully deleted!');
        return redirect()->back();
    }
}
