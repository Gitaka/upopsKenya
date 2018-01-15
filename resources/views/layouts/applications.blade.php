<!DOCTYPE html>
<html>
<head>
  <title>Holy Rossary College</title>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
 <!-- <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->
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
          <li><a href="{{url('/adminHome')}}">Home</a></li>
          <li><a href="{{url('/adminHome')}}">Courses</a></li>
          <li class="active"><a href="#">Applications</a></li>
          <li><a href="#">Students</a></li>

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

         @if(Session::has('accepted'))
              <p class="alert alert-success">{{Session::get('accepted')}}</p>
        @endif
    <div class="col-sm-9"><h2 style="color:#3c763d">Student Applications</h2></div>
    <div class="col-sm-3" style="padding-left:150px">
    <!--</br><button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Add Courses</button></div>-->
  </div>
  
     </br> <table class="table table-bordered table-responsive">
    <thead style="background-color:#dff0d8;color:#3c763d">

      <tr>
        <th>Students Name</th>
        <th>KCSE Grade</th>
        <th>Course</th>
        <th>Intake</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
           @foreach ($students as $student)
             <tr>
              <td><a href="{{url('appDetails')}}/{{$student->id}}">{{$student->name}}</a></td>
              <td>{{$student->kcse}}</td>
              <td>{{$student->course}}</td>
              <td>{{$student->intake}}</td>
              <td>
       @if($student->accepted == 1)
            <button class="btn btn-sm btn-success">Application Approved</button>
         @endif

         @if($student->accepted == 0)
                <button class="btn btn-sm btn-warning"><a href="{{url('acceptApplication')}}/{{$student->id}}">Accept Application</a> </button>
        @endif


          
              </td>
            </tr>                  
           @endforeach

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