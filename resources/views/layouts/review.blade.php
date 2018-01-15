<!DOCTYPE html>
<html>
<head>
	<title>Holy Rossary College</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
	<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <style type="text/css">
    #pi{
      border-bottom: 5px solid #000;
    },
    #sp-style{
      font-style: helvetica;
      font-size: 50px;
      color: red;
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
		      <li><a href="{{url('/course')}}">Courses</a></li>
		      <li  class="active"><a href="{{url('/apply')}}">Apply</a></li>
		    
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
  		<div class="col-sm-9"><h2 style="color:#3c763d">Review The Application</h2></div>
  		<div class="col-sm-3" style="padding-left:150px">
  		<!--</br><button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Add Courses</button>--></div>
  	</div>
	
	
	</div>
  
   <div class="row" style="border:2px solid #d8d8d8;border-radius:1%;padding:5%">
        @foreach ($details as $detail)

          <div class="row">

          <h3>Personal Information</h3>

          <div class="row" style="padding-left:5%;margin-bottom:3%">
                <a href="{{url('category/sub')}}"><img class="img-circle"src="{{asset($detail->passportPhoto)}}" width="150" height="150"></a>            
          </div>
            <div class="col-sm-3"><span>Course: {{$detail->name}}</span></div>
            <div class="col-sm-3"><span>ID Number: {{$detail->idNo}}</span></div>
            <div class="col-sm-3"><span>Gender: {{$detail->gender}}</span></div>
            <div class="col-sm-3"><span>D.O.B: {{$detail->dob}}</span></div>
          </div>
          <div class="row">
          <h3>Next Of Kin</h3>
            <div class="col-sm-3"><span>Next Of Kin: {{$detail->kin}}</span></div>
            <div class="col-sm-3"><span>Phone Number: {{$detail->kinContact}}</span></div>
            <div class="col-sm-3"><span>Relationship: {{$detail->relationship}}</span></div>
            <div class="col-sm-3"><span>Kin ID Number: {{$detail->kinIdNo}}</span></div>
          </div>
          <div class="row">
          <h3>Residency</h3>
            <div class="col-sm-3">County: <span id="sp-style">{{$detail->county}}</span></div>
            <div class="col-sm-3"><span>Constituency: {{$detail->constituency}}</span></div>
            
          </div>
          <div class="row">
          <h3>School History</h3>
            <div class="col-sm-3"><span>High School: {{$detail->secondary}}</span></div>
            <div class="col-sm-3
            "><span>Primary School: {{$detail->primarySc}}</span></div>

          </div>
          <div class="row">
            <div class="col-sm-3"><span>KCSE Exam Year: {{$detail->kcse_y}}</span></div>
            <div class="col-sm-3"><span>KCPE Exam Year: {{$detail->kcpe_y}}</span></div>
                <div class="col-sm-3"><span>KCSE Grade: {{$detail->kcse}}</span></div>
            <div class="col-sm-3"><span>KCPE Marks: {{$detail->kcpe}}</span></div>
          </div>

          <div class="row">
            <h3>Application Details</h3>
            <div class="col-sm-3"><span>Course: {{$detail->course}}</span></div>
            <div class="col-sm-3"><span>Intake: {{$detail->intake}}</span></div>

          </div>


        @endforeach


   </div>
           <div class="row" style="margin-bottom:3%;margin-top:2%">
              <div class="col-md-offset-4 col-md-9">
                    <button id="btn-signup" type="submit" class="btn btn-info btn-lg"><i class="icon-hand-right"></i><a href="{{url('/receiveApp')}}" style="color:#fff">Send Application</a></button>
                    
              </div>          
        </div>
</div>
</body>
</html>