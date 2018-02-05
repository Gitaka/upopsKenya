@extends('home')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
@section('container')
<div class="container">

	        <div id="signupalert" class="alert alert-info">
                     <h3>Create Events</h3>             
              </div>
	       <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
   
     @if(Session::has('successEvent'))
            <p class="alert alert-success">{{Session::get('successEvent')}}</p>
         @endif
                       @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                             <form id="signupform" class="form-horizontal" role="form"
                            method="POST" action="{{url('createEvent')}}">
                                   <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
  
                                <div class="form-group">
                                    <label for="firstname" class="col-md-4 control-label">Title</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title" placeholder="Event title">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="firstname" class="col-md-4 control-label">Venue</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="venue" placeholder="Event Venue">
                                    </div>
                                </div>     
                                 <div class="form-group">
                                    <label for="firstname" class="col-md-4 control-label">Date</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="date" placeholder="Event Date">
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label for="firstname" class="col-md-4 control-label">Event Description</label>
                                    <div class="col-md-8">
                                       <Textarea rows="10"cols="20" class="form-control" placeholder="Event Description" name="description"></Textarea>
                                      
                                    </div>
                                </div>
                                    

       
                                    

             
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-5 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Submit</button>
                                        
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">                                            
                                        
                                </div>
   
                            </form>              
               
                
         </div> 
</div>
@stop
</body>
</html>