<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\User;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Validator;
use Validator,Redirect,Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userRegister()
    {
        if(Auth::guard('admin')->check())
		{
			return redirect('admin/dashboard');
		}
		else
		{
			return view('user-register');
		}
    }

    public function postUserRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'name' => 'required|min:4|max:25',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:3|max:20',
                'confirm_password' => 'required|min:3|max:20|same:password',
        ]);
        
        //print_r($validator->validate());

        if($validator->validate())
        {
            $user = new User;

            $user->name = $request->name;

            $user->email = $request->email;

            $user->password = Hash::make($request->password);

            $user->save();

            /*if($user->save())
            {
                //$data['message'] = 'User Saved Successfully.';
                $data['title'] = "This is Test Mail Tuts Make";

                \Mail::send('emails.email', $data, function($message) {

                    $message->to('tutsmake@gmail.com', 'Receiver Name')

                            ->subject('Tuts Make Mail');
                });
            }*/

           //return route('user-register', $data);
            return Redirect::back()->with('message', 'User Saved Successfully.');
        }
    }
}
