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
		      <li  class="active"><a href="{{url('/adminHome')}}">Courses</a></li>
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

         @if(Session::has('acknowledge'))
              <p class="alert alert-success">{{Session::get('acknowledge')}}</p>
        @endif

          @if($accept == 1)
           <p class="alert alert-danger">Application Approved for the course in {{$course}}.</p>
            
         @endif
     <h2>{{$name}}</h2>  
		<div class="col-sm-9"><h2 style="color:#3c763d">Courses Offered</h2></div>
		<div class="col-sm-3" style="padding-left:150px">
		<!--</br><button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Add Courses</button>--></div>
	</div>
	
		 </br> <table class="table table-bordered table-responsive">
    <thead style="background-color:#dff0d8;color:#3c763d">

      <tr>
        <th>School</th>
        <th>Department</th>
        <th>Program</th>
        <th>Course</th>
        <th>Qualifications</th>
      </tr>
    </thead>
    <tbody>
          @foreach($courses as $course)
		        <tr>
		        <td>{{$course->school}}</td>
		        <td>{{$course->faculty}}</td>
		        <td>{{$course->program}}</td>
		        <td>{{$course->courseName}}</td>
            <td>
              <p>1) KCSE(or its equivalent)with mean Grade C-(minus).</br>
                 2) O-Level Division III (or its equivalent).</br>
                 3) Credit Pass in a relevant Certificate Course from the Holy Rosary Collage or a 
                     recognized institutions.</br>
                 4) Holder of qualifications deemed to be equivalent to any above.</br>
                 5) Possession of the Minimum requirements does not guarantee automatic admission to   Diploma Programmes.</br> 
                 6) Subject to approval of the Senat,schools may formulate regulations requiring applicants to have attained such academic or equivalent qualification,as may be consistent with the goals of their diploma program.</br>   
              </p>

            </td>
		      </tr>
           @endforeach
      <tr>
        <td>Directorate of Computing and E-learning</td>
        <td>Computing and Information Technology</td>
        <td>Diploma</td>
        <td>Information Technology</td>
        <td>
              <p>1) KCSE(or its equivalent)with mean Grade C-(minus).</br>
                 2) O-Level Division III (or its equivalent).</br>
                 3) Credit Pass in a relevant Certificate Course from the Holy Rosary Collage or a 
                     recognized institutions.</br>
                 4) Holder of qualifications deemed to be equivalent to any above.</br>
                 5) Possession of the Minimum requirements does not guarantee automatic admission to   Diploma Programmes.</br> 
                 6) Subject to approval of the Senat,schools may formulate regulations requiring applicants to have attained such academic or equivalent qualification,as may be consistent with the goals of their diploma program.</br>   
              </p>

        </td>
      </tr>
        <tr>
        <td>Directorate of Computing and E-learning</td>
        <td>Computing and Information Technology</td>
        <td>Certificate</td>
        <td>Information Technology</td>
        <td>
          
           <p>1) KCSE Aggregate grade "D".</br>
                   
          </p>
        </td>
      </tr>
       <tr>
        <td>Cooperatives and Community Development</td>
        <td>Cooperatives</td>
        <td>Diploma</td>
        <td>Community Development</td>
        <td>
              <p>1) KCSE(or its equivalent)with mean Grade C-(minus).</br>
                 2) O-Level Division III (or its equivalent).</br>
                 3) Credit Pass in a relevant Certificate Course from the Holy Rosary Collage or a 
                     recognized institutions.</br>
                 4) Holder of qualifications deemed to be equivalent to any above.</br>
                 5) Possession of the Minimum requirements does not guarantee automatic admission to   Diploma Programmes.</br> 
                 6) Subject to approval of the Senat,schools may formulate regulations requiring applicants to have attained such academic or equivalent qualification,as may be consistent with the goals of their diploma program.</br>   
              </p>

        </td>
      </tr>
      <tr>
        <td>Business and Economics</td>
        <td>Accounting and Finance</td>
        <td>Diploma</td>
        <td>Purchasing and Supplies</td>
        <td>
              <p>1) KCSE(or its equivalent)with mean Grade C-(minus).</br>
                 2) O-Level Division III (or its equivalent).</br>
                 3) Credit Pass in a relevant Certificate Course from the Holy Rosary Collage or a 
                     recognized institutions.</br>
                 4) Holder of qualifications deemed to be equivalent to any above.</br>
                 5) Possession of the Minimum requirements does not guarantee automatic admission to   Diploma Programmes.</br> 
                 6) Subject to approval of the Senat,schools may formulate regulations requiring applicants to have attained such academic or equivalent qualification,as may be consistent with the goals of their diploma program.</br>   
              </p>

        </td>
      </tr>
      <tr>
        <td>Business and Economics</td>
        <td>Accounting and Finance</td>
        <td>Diploma</td>
        <td>Accoutancy and Finance</td>
        <td>
          
              <p>1) KCSE(or its equivalent)with mean Grade C-(minus).</br>
                 2) O-Level Division III (or its equivalent).</br>
                 3) Credit Pass in a relevant Certificate Course from the Holy Rosary Collage or a 
                     recognized institutions.</br>
                 4) Holder of qualifications deemed to be equivalent to any above.</br>
                 5) Possession of the Minimum requirements does not guarantee automatic admission to   Diploma Programmes.</br> 
                 6) Subject to approval of the Senat,schools may formulate regulations requiring applicants to have attained such academic or equivalent qualification,as may be consistent with the goals of their diploma program.</br>   
              </p>

        </td>
      </tr>
      <tr>
        <td>Business and Economics</td>
        <td>Entreprenuership</td>
        <td>Diploma</td>
        <td>Entreprenuership</td>
        <td>
              <p>1) KCSE(or its equivalent)with mean Grade C-(minus).</br>
                 2) O-Level Division III (or its equivalent).</br>
                 3) Credit Pass in a relevant Certificate Course from the Holy Rosary Collage or a 
                     recognized institutions.</br>
                 4) Holder of qualifications deemed to be equivalent to any above.</br>
                 5) Possession of the Minimum requirements does not guarantee automatic admission to   Diploma Programmes.</br> 
                 6) Subject to approval of the Senat,schools may formulate regulations requiring applicants to have attained such academic or equivalent qualification,as may be consistent with the goals of their diploma program.</br>   
              </p>


        </td>
        
      </tr>
        <tr>
        <td>Business and Economics</td>
        <td>Accounting and Finance</td>
        <td>Diploma</td>
        <td>MicroFinance</td>
        <td>
              <p>1) KCSE(or its equivalent)with mean Grade C-(minus).</br>
                 2) O-Level Division III (or its equivalent).</br>
                 3) Credit Pass in a relevant Certificate Course from the Holy Rosary Collage or a 
                     recognized institutions.</br>
                 4) Holder of qualifications deemed to be equivalent to any above.</br>
                 5) Possession of the Minimum requirements does not guarantee automatic admission to   Diploma Programmes.</br> 
                 6) Subject to approval of the Senat,schools may formulate regulations requiring applicants to have attained such academic or equivalent qualification,as may be consistent with the goals of their diploma program.</br>   
              </p>

        </td>
      </tr>
      <tr>
        <td>Business and Economics</td>
        <td>Accounting and Finance</td>
        <td>Diploma</td>
        <td>Business Administration</td>
        <td>
              <p>1) KCSE(or its equivalent)with mean Grade C-(minus).</br>
                 2) O-Level Division III (or its equivalent).</br>
                 3) Credit Pass in a relevant Certificate Course from the Holy Rosary Collage or a 
                     recognized institutions.</br>
                 4) Holder of qualifications deemed to be equivalent to any above.</br>
                 5) Possession of the Minimum requirements does not guarantee automatic admission to   Diploma Programmes.</br> 
                 6) Subject to approval of the Senat,schools may formulate regulations requiring applicants to have attained such academic or equivalent qualification,as may be consistent with the goals of their diploma program.</br>   
              </p>

        </td>
      </tr>
      <tr>
        <td>Business and Economics</td>
        <td>Accounting and Finance</td>
        <td>Diploma</td>
        <td>Human Resource Management</td>
        <td>
          
              <p>1) KCSE(or its equivalent)with mean Grade C-(minus).</br>
                 2) O-Level Division III (or its equivalent).</br>
                 3) Credit Pass in a relevant Certificate Course from the Holy Rosary Collage or a 
                     recognized institutions.</br>
                 4) Holder of qualifications deemed to be equivalent to any above.</br>
                 5) Possession of the Minimum requirements does not guarantee automatic admission to   Diploma Programmes.</br> 
                 6) Subject to approval of the Senat,schools may formulate regulations requiring applicants to have attained such academic or equivalent qualification,as may be consistent with the goals of their diploma program.</br>   
              </p>
        </td>
      </tr>
    </tbody>
  </table>
	</div>


	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Course</h4>
      </div>
      <div class="modal-body">
        <form id="signupform" class="form-horizontal" role="form"
                            method="POST" action="{{url('course')}}">
                                   <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Course Name">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Course No</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="no" placeholder="Course Number">
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Program</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="program">
                                        	<option value="Diploma">Diploma</option>
                                        	<option value="Certificate">Certificate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">School</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="school" placeholder="School">
                                    </div>
                                </div>
                                    

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Department</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="department" placeholder="Department">
                                    </div>
                                </div>
                                    

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Submit</button>
                                        
                                    </div>
                                </div>
                                
                            
                                
                                
                                
                            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
</body>
</html>