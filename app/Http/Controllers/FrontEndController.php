<?php

namespace App\Http\Controllers;
use App\IntroCards;
use App\Products;
use App\Services;
use App\Settings;
use App\Slider;
use App\SliderContent;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $services = Services::all();
        $settings = Settings::Find(1);
        $introcards = IntroCards::all();
        $slidercontent = SliderContent::all();
        $products = Products::all();
        $data = ['products' => $products, 'slidercontent' => $slidercontent, 'sliders' => $sliders, 'introcards'=>$introcards, 'services'=>$services, 'settings'=>$settings];

        return view('frontend.homepage')->with($data);
    }
}
