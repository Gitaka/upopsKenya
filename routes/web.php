<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/overview',function(){
	return view('overview');
});
Route::get('/faq',function(){
	return view('faq');
});
Route::get('/functions',function(){
	return view('functions');
});
Route::get('projects',function(){
	return view('projects');
});
Route::get('workshops','UsersController@workshops');
/*Route::get('workshops',function(){
	return view('workshops');
});*/
Route::get('stockholm',function(){
	return view('stockholm');
});
Route::get('rotterdam',function(){
	return view('rotterdam');
});
Route::get('basel',function(){
	return view('basel');
});
Route::get('minamata',function(){
	return view('minamata');
});
Route::get('contactUs',function(){
	return view('contact');
});
Route::get('workshop',function(){
	return view('shop');
});

Route::get('draft/{id}','UsersController@draft');
/*Route::get('draft',function(){
	return view('draft');
});*/
Route::get('saicm',function(){
	return view('saicm');
});
Route::get('keActivities',function(){
	return view('kenyaActivities');
});
Route::get('kncp',function(){
	return view('kncp');
});
Route::get('ksip',function(){
	return view('ksip');
});
Route::get('iccm1',function(){
	return view('iccm.iccm1');
});
Route::get('iccm2',function(){
	return view('iccm.iccm2');
});
Route::get('iccm3',function(){
	return view('iccm.iccm3');
});
Route::get('iccm4',function(){
	return view('iccm.iccm4');
});

Route::get('upops',function(){
	return view('upops.index');
});
Route::get('mercury',function(){
	return view('mercury.index');
});
Route::get('goldchild',function(){
	return view('goldchild.index');
});
Route::get('gef',function(){
	return view('gef');
});
Route::get('industryprojects',function(){
	return view('industry.projects');
});
Route::get('industryworkshops',function(){
	return view('industry.workshops');
});
Route::get('agroprojects',function(){
	return view('agro.projects');
});
Route::get('agroworkshops',function(){
	return view('agro.workshops');
});

Route::get('consultancy_reports','UsersController@c_reports');
/*Route::get('consultancy_reports',function(){
	return view('resources.consultancyreports');
});*/
Route::get('project_documents','UsersController@p_documents');
/*Route::get('project_documents',function(){
	return view('resources.projectdocuments');
});*/

Route::get('gallery','UsersController@gallery');
/*Route::get('gallery',function(){
	return view('gallery');
});*/
Route::get('wastetowealth',function(){
	return view('wastetowealth');
});
Route::get('events','UsersController@events');
/*Route::get('events',function(){
	return view('events');
});*/
Route::get('partners',function(){
	return view('partners');
});
Route::get('news',function(){
	return view('news');
});
Route::get('signin','UsersController@signin');
Route::get('logout','UsersController@logout');
Route::post('auth','UsersController@authenticate');
Route::get('register','UsersController@register');
Route::post('createUser','UsersController@createUser');

Route::Group(['middleware'=>'auth'],function(){
	
	 Route::Group(['middleware'=>'AdminAuth'],function(){
	 	  Route::get('admin','HomeController@adminHome');
	 	  Route::get('createReport','HomeController@createReport');
	 	  Route::post('createReport','HomeController@storeReport');

	 	  Route::get('createEvent','HomeController@createEvent');
	 	  Route::post('createEvent','HomeController@storeEvent');

	 	  Route::get('createWorkshop','HomeController@createWorkshop');
	 	  Route::post('createWorkshop','HomeController@storeWorkshop');

	 	  Route::get('addToGallery','HomeController@addToGallery');
	 	  Route::post('addToGallery','HomeController@storeImages');

	 });
	 Route::Group(['middleware'=>'UserAuth'],function(){
	 	  Route::get('user','HomeController@userHome');
	 });

});