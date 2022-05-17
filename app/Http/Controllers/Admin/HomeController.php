<?php

namespace App\Http\Controllers\Admin;


use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;

class HomeController extends Controller
{
    /**
     * Only Authenticated users for "admin" guard 
     * are allowed.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show Admin Dashboard.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.dashboard');
    }
	public function myaccount()
	{
		//echo '<pre>';
		//print_r(Auth::user()->email);
		return view('admin.myaccount');
	}
	
	public function postMyaccount(Request $request)
	{
		
		if($request->hasFile('profile_img'))
		{
			$validator = Validator::make($request->all(), [
                'name' => 'required|min:4|max:25',
                'email' => 'required|email|unique:users',
				'profile_img' => 'image|mimes:jpeg,png,jpg,gif,svg',
			]);
		}
		else
		{
			$validator = Validator::make($request->all(), [
                'name' => 'required|min:4|max:25',
                'email' => 'required|email|unique:users',
			]);
		}
		   
		if($validator->validate()) 
		{
			if($request->hasFile('profile_img'))
			{			
				$name = $request->name;
				
				$email = $request->email;
				
				$phone = $request->phone;
				
				$admin_details = \DB::table('admins')->where('id', 1)->first();
				
				$admin_prof_img = $admin_details->profile_img;
				
				if(is_file(public_path('/uploads/profile_image/' . $admin_prof_img)))
				{
					unlink(public_path('/uploads/profile_image/' . $admin_prof_img));
				}
				//die();
		
				$file = $request->file('profile_img');
				$destinationPath = public_path('/uploads/profile_image/'); // upload path
				// Upload Orginal Image           
				$profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
				$file->move($destinationPath, $profileImage);
				
				\DB::table('admins')->where('id', 1)->update(['name' => $name,'email' => $email, 'profile_img' => $profileImage, 'phone' => $phone]);
				
				return Redirect::back()->with('message', 'Details Updated Successfully.');
			}
			else
			{
				$name = $request->name;
				
				$email = $request->email;
				
				$phone = $request->phone;
				
				\DB::table('admins')->where('id', 1)->update(['name' => $name,'email' => $email, 'phone' => $phone]);
				
				return Redirect::back()->with('message', 'Details Updated Successfully.');
			}
        }
	}
	
	public function changePassword()
	{
		return view('admin.change_password');
	}
	
	public function postChangePassword(Request $request)
	{
		
		$validator = Validator::make($request->all(), [
			'current_password' => 'required',
			'new_password' => 'required|min:8',
            'confirm_password' => 'same:new_password',
		]);
		
		if($validator->validate()) 
		{
			$input = $request->all();
			$user = \DB::table('admins')->where('id', 1)->first();
			
			if(!Hash::check($input['current_password'], $user->password))
			{
				return Redirect::back()->with('error-message', 'Current passowrd did not match !!');
			}
			else
			{
				\DB::table('admins')->where('id', 1)->update(['password' => Hash::make($request->new_password)]);
				return Redirect::back()->with('message', 'Password Changed Successfully.');
			}
		}
	}
	
	public function getSiteSettings()
	{
		return view('admin.site_settings');
	}
}
