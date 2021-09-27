<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Mail;

class AuthController extends Controller
{
    //START >>>>>>>>>
    public function RegisterShow()
    {
        return view('register');
    }
    //END >>>>>>>>>




    //START >>>>>>>>>
    public function Register(Request $request)
    {

             try {

                $array = [
                    "name"    => $request['name'],
                    "email"   => $request['email'],
                    "phone"   => $request['phone'],
                    "age"     => $request['age'],
                    "gender"     => $request['age'],
                    "special" => $request['special'],
                    "talent"  => $request['talent'],
                    "password"=> bcrypt($request['password']),
                ];

                if(isset(auth()->user()->id))
                    $user = User::find(auth()->user()->id)->update($array);
                else
                   {
                    $user = User::create($array);
                    Auth::login($user);
                    }

                    $data =
                    [
                        "subject" =>  'تسجيل عضوية  جديد   ' ,
                        "msg" =>  'تم التسجيل من قبل '. auth()->user()->name ,
                    ];
            
                Mail::send('email.register', $data, function($message) use ($data) {
                    $message->to('info@sand.business')->subject
                       ($data['subject']);
                    $message->from('admin@sand.business','Sand');
                 });



                return redirect(route('index'));

        }
         catch (\Throwable $th) {

            return back()->with('error', __('main_page.a166') );
        }

    }
    //END >>>>>>>>>

}
