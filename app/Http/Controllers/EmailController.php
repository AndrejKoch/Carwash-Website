<?php
namespace App\Http\Controllers;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    public function sendContact(Request $request)
    {
        $data = $request->all();
        $errors = Validator::make($data, [
            'name' => 'required',
            'subject' => 'required',
            'phone'   => 'required',
            'message' => 'required',
        ]);
        if ($errors->fails()) {
            return redirect('/')
                ->withErrors($errors)
                ->withInput();
        }
        $data["title"] = "New message from Contact page";


        Mail::to("klipplusmk@gmail.com")->send(new Contact($data));
        Session::flash('flash_message', 'Пораката е успешно пратена, ке ве контактираме наскоро!');
        return redirect('/#footer');
    }

}
