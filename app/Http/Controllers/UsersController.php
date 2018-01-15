<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use View;
use Redirect;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function signin(){
    	return View::make('auth.signin');
    }

    public function authenticate(Request $request){
    	$attempt = Auth::attempt([
          'email'=> $request->get('email'),
          'password'=>$request->get('password')        
        ]);

        if(!$attempt){
        	Session::flash('signin-fail','Incorrect Pasword or Email');
        	 return Redirect::to('signin');
        }else{
        	return 'successfully authenticated';
        }
    }

    public function register(){
    	return View::make('auth.register');
    }

    public function createUser(Request $request){
    	$user = $request->all();
    	if(!$user){
    		return View::make('auth.register')->withErrors($user)->withInput();
    	}else{
    		  User::create(
                [
                 'fname'=>$request->get('fname'),
                 'lname'=>$request->get('lname'),
                 'email'=>$request->get('email'),
                 'password'=>bcrypt($request->get('password')),
                 'department'=>$request->get('department'),
                ]
         	 );

             //Session::flash('successRegister','Registerd Successfully');
         	 return Redirect::to('signin');
   
         }
    	}
    }

