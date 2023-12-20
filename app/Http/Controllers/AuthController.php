<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Mail;
use Str;
class AuthController extends Controller
{
    public function login()
    {
        //dd(Hash::make(123456));
        if(!empty(Auth::check()))
        {
            if (Auth::user()->user_type == 1)
            {   
                return redirect('admin/dashboard');
            }
            else if (Auth::user()->user_type == 2)
            {
                return redirect('student/dashboard');                
            }
            else if (Auth::user()->user_type == 3)
            {
                return redirect('partner/dashboard');             
            }
            
        }
        return view('auth.login');
    }
    public function AuthLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        {
            if (Auth::user()->user_type == 1)
            {   
                return redirect('admin/dashboard');
            }
            else if (Auth::user()->user_type == 2)
            {
                return redirect('student/dashboard');                
            }
            else if (Auth::user()->user_type == 3)
            {
                return redirect('partner/dashboard');             
            }
            
        }
        else
        {
            return redirect()->back()->with('error', 'Please enter correct email and password');
        }

    }
    public function forgotpassword()
    {
        return view('auth.forgot');
    }

    public function PostForgotPassword(Request $request)
    {
        $user = User::getEmailSingle($request->email);  
        if(!empty($user))
        {
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', "Please check your E-mail and reset your password ! ");  
        }
        else
        {
            return redirect()->back()->with('error', "Email not found in the System, please enter a right E-mail and try again, thank you! ");  
        }
    }
    public function reset($remember_token)
    {
        $user = User::getTokenSingle($remember_token);
        if(!empty($user))
        {
            $data['user'] = $user;
            return view('auth.reset', $data);
        }
        else
        {
            abort(404);
        }
    }
    public function PostReset($token, Request $request)
    {
        if($request->password == $request->cpassword)
        {
            $user = User::getTokenSingle($token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30); 
            $user->save();
            return redirect(url(''))->with('success', "Password Successfully reset");
        }
        else
        {
            return redirect()->back()->with('error', "Password doesn't match, try again! ");  
        }

    }


    public function showRegistrationForm()
    {
        $data['header_title'] = "Add New Admin";
        return view('auth.register', $data);
    } 

    public function register(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users',
            
        ]);
        // Create a new user
        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);

        // You can add other fields here as needed
        $user->user_type = 2;
        $user->save();

        // Assuming you have a route named 'login', adjust as needed
        return redirect('/admin/')->with('success', 'Registration successful. Please log in.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}

