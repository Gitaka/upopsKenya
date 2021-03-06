<!DOCTYPE html>
<html>
<head>
	<title>Holy Rossary College</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <style type="text/css">
    #choice{
      border-bottom: 5px solid #000;
    }
  </style>
</head>
<body>
<div class="container">
	<div class="row">
				<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Holy Rossary College</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="{{url('/home')}}">Home</a></li>
		      <li  class="active"><a href="{{url('/course')}}">Courses</a></li>
		      <li><a href="{{url('/apply')}}">Apply</a></li>
		      

		    </ul>
	
		     <ul class="nav navbar-nav navbar-right">
		      <li><a href="{{url('signout')}}"><span class="glyphicon glyphicon-user"></span>Sign Out</a></li>
		      
		    </ul>
	
		   
		  </div>
    </nav>
	</div>
	<div class="row">
  	<div class="row">
  	     @if(Session::has('course'))
              <p class="alert alert-success">{{Session::get('course')}}</p>
           @endif
  		<div class="col-sm-9"><h2 style="color:#3c763d">Please Complete The Application Process</h2></div>
  		<div class="col-sm-3" style="padding-left:150px">
  		<!--</br><button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Add Courses</button>--></div>
  	</div>
	
	
	</div>
  
  <div class="row well" style="background-color:#d6e9c6">
    <div class="col-sm-3" id="pi">Personal Information</div>
    <div class="col-sm-3" id="qtn">Qualifications</div>
    <div class="col-sm-3" id="choice">Choose A Course</div>
    <div class="col-sm-3" id="review">Review Documents</div>
  </div>
  <div class="row" style="border:1px solid #d8d8d8;border-radius:5px">
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
                            method="POST" action="{{url('/select')}}">
          <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
          <input id="id" type="hidden" name="id" value="{{$id}}">

        <div class="row" style="padding:3%">
        <h3>Select a Course</h3><br>
          <div class="col-sm-4">
                <div class="form-group">
                    <label  class="col-md-5 control-label">Select Course</label>
                      <div class="col-md-7">
                         <select name="course" class="form-control">
                              @foreach($courses as $c)
                                 
                                  <option value='{{$c->courseName}}'>{{$c->courseName}}</option></br>
                                      
                              @endforeach  
                         </select>                        
                    </div>
                </div> <br>
                                                        
          </div> 
          <div class="col-sm-4">
                <div class="form-group">
                    <label for="firstname" class="col-md-5 control-label">Intake</label>
                      <div class="col-md-7">
                          <select name="intake" class="form-control">
                             <option value="january">January Intake</option>
                             <option value="may">May Intake</option>
                             <option value="september">September Intake</option>
                          </select>
                    </div>
                </div> <br>
                                                                     
          </div>
          <div class="col-sm-4">
             
                                         
          </div>
        </div>
        <div class="row" style="margin-bottom:5%">
              <div class="col-md-offset-3 col-md-9">
                    <button id="btn-signup" type="submit" class="btn btn-info btn-lg"><i class="icon-hand-right"></i> &nbsp Save & Continue</button>
                    
              </div>          
        </div>
      </form>              
  </div>
</div>
</body>
</html>