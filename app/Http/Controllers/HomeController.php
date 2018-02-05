<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Report;
use App\Event;
use App\Workshop;
use App\Gallery;
use View;
use DB;
use Redirect;
use Session;


class HomeController extends Controller
{
    public function adminHome(){
    	return Redirect::to('createEvent');
    }

    public function userHome(){
    	return 'Hello user home';
    }

    public function createReport(){
    	return View::make('resources.createReport');
    }

    public function storeReport(Request $request){
    	$this->validate($request,[
        'file'=>'required',
        'title'=>'required',
        'category'=>'required',

         ]);
        $report = $request->all();
    	if(!$report){
    		return View::make('resources.createReport')->withErrors($report)->withInput();
    	}else{
           
        if($request->hasFile('report_file')){
             $file = $request->file('report_file');

             $randomString = str_random(15);
             $destinationPath = 'downloads/reports';
             $fileName = $file->getClientOriginalName();
          
             $ext = $file->getClientOriginalExtension();
             $upload_success = $file->move($destinationPath, $fileName);
             $path = $destinationPath.'/'.$fileName;
             
              if($upload_success){
               
                        Report::create([
                           'title'=>$request->get('title'),
                           'userId'=>Auth::user()->id,
                           'category'=>$request->get('category'),
                           'file'=>$path,
                          
                        ]);
                    Session::flash('successReport','Report created successfully');
                    return Redirect::to('createReport');    
             }
          
          }
    	}
    }


    public function createEvent(){
    	return View::make('resources.createEvent');
    }

    public function storeEvent(Request $request){
       $this->validate($request,[
        'venue'=>'required',
        'title'=>'required',
        'description'=>'required',
        'date'=>'required',

         ]);
        $report = $request->all();
    	if(!$report){
    		return View::make('resources.createEvent')->withErrors($report)->withInput();
    	}else{
                      Event::create([
                           'title'=>$request->get('title'),
                           'userId'=>Auth::user()->id,
                           'venue'=>$request->get('venue'),
                           'date'=>$request->get('date'),
                           'description'=>$request->get('description'),
                          
                        ]);
                    Session::flash('successEvent','Event created successfully');
                    return Redirect::to('createEvent');
    	}
    }




    public function createWorkshop(){
    	return View::make('resources.createWorkshop');
    }

    public function storeWorkshop(Request $request){
    	$this->validate($request,[
          'file'=>'required',
          'title'=>'required',
          'objective'=>'required',
          'location'=>'required',
          'date'=>'required',

         ]);
        $workshop = $request->all();
    	if(!$workshop){
    		return View::make('resources.createWorkshop')->withErrors($workshop)->withInput();
    	}else{
          
        if($request->hasFile('file')){
             $file = $request->file('file');

             $randomString = str_random(15);
             $destinationPath = 'downloads/workshops';
             $fileName = $file->getClientOriginalName();
          
             $ext = $file->getClientOriginalExtension();
             $upload_success = $file->move($destinationPath, $fileName);
             $path = $destinationPath.'/'.$fileName;
             
              if($upload_success){
               
                        Workshop::create([
                           'title'=>$request->get('title'),
                           'userId'=>Auth::user()->id,
                           'objective'=>$request->get('objective'),
                           'date'=>$request->get('date'),
                           'location'=>$request->get('location'),

                           'file'=>$path,
                          
                        ]);
                    Session::flash('successWorkshop','Workshop created successfully');
                    return Redirect::to('createWorkshop');    
             }
          
          }
    	}
    }


    public function addToGallery(){
    	return View::make('resources.addToGallery');
    }

    public function storeImages(Request $request){
    	$this->validate($request,[
          'file'=>'required',

         ]);
        $image = $request->all();
    	if(!$image){
    		return View::make('resources.addToGallery')->withErrors($image)->withInput();
    	}else{
          
        if($request->hasFile('file')){
             $file = $request->file('file');

             $randomString = str_random(15);
             $destinationPath = 'uploads/gallery';
             $randomString = str_random(15);
             $fileName = $randomString.'_'.$file->getClientOriginalName();
          
             $ext = $file->getClientOriginalExtension();
             $upload_success = $file->move($destinationPath, $fileName);
             $path = $destinationPath.'/'.$fileName;
             
              if($upload_success){
               
                        Gallery::create([
                          'userId'=>Auth::user()->id,
                           'file'=>$path,
                          
                        ]);
                    Session::flash('successGallery','Image added successfully');
                    return Redirect::to('addToGallery');    
             }
            
          }else{
          	return'no image';
          }
    	}
    }

}
