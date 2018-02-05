<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use View;
use Redirect;
use App\Report;
use App\Event;
use App\Workshop;
use App\Gallery;
use DB;
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
        }else if(Auth::user()->access == 0){
        	return Redirect::to('admin');
        }else if(Auth::user()->access == 1){{
            return Redirect::to('user');
        }

        }
    }

    public function logout(){
          Auth::logout();
          return Redirect::to('/');
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


    public function c_reports(){
        $reports = DB::table('reports')->where('category','=','Consultancy Report')->orderBy('id','desc')->paginate(10);
        return view('resources.consultancyreports')->with('reports',$reports);
    }

    public function p_documents(){
        $reports = DB::table('reports')->where('category','=','Project document')->orderBy('id','desc')->paginate(10);
        return view('resources.projectdocuments')->with('reports',$reports);
    }

    public function events(){
         //$events = DB::table('events')->orderBy('id','desc')->get();
        $events = DB::table('events')->orderBy('id','desc')->paginate(10);
        return view('events')->with('events',$events);
    }

    public function gallery(){
        $images = DB::table('gallerys')->orderBy('id','desc')->paginate(10);
        //return $images;
        return view('gallery')->with('images',$images);
    }

    public function workshops(){
        $workshops = DB::table('workshops')->paginate(10);
        //return $workshops;
        return View::make('workshops')->with('workshops',$workshops);
    }

    public function draft($id){
        $draft = DB::table('workshops')->where('id','=',$id)->get();
        return view::make('draft')->with('draft',$draft);
    }
}

