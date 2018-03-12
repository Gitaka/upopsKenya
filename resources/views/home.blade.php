
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>UPOPs</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />

	<!-- Owl-carousel-CSS -->
	<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/team.css')}}" type="text/css" />
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

	<!-- font-awesome-icons -->
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
	
	
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<style type="text/css">
		.dropdown-submenu{
			position: relative;
		}
		.dropdown-submenu .dropdown-menu{
			top: 0;
			left: 100%;
			margin-top: -1px;

		}
	</style>
</head>
<body>

<div class="nav-container">
	    <span style="padding-left:2%"><i class="fa fa-phone fa-2x ic-style">&nbsp;</i>
        <span style="color:#006400">Phone: +254 202730808, +254 20 2725707</span>
	    </span>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span><i class="fa fa-envelope fa-2x ic-style">&nbsp;</i>
         <span style="color:#006400">Email: upopskenya@gmail.com</span>
		</span>

</div>	
<div class="nav-logo">
	<div class="row">
		<div class="col-sm-4">
			<img src="{{asset('images/gef.jpg')}}"  width="70" height="70">
		</div>
		<div class="col-sm-4" style="padding-left:10%">
			<img src="{{asset('images/arms.jpg')}}"  width="70" height="70">
		</div>
		<div class="col-sm-4" style="padding-left:20%">
			<img src="{{asset('images/undp.png')}}"  width="70" height="70">
		</div>
	</div>
</div>
<div class="row">
			<nav class="navbar navbar-default" style="border:1px solid #000">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="{{url('admin')}}">Home</a></li>
          <li><a href="{{url('/createEvent')}}">Events</a></li>
          <li><a href="{{url('/createReport')}}">Resources</a></li>
		      <!--<li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/createReport')}}">Resources
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Consultancy Reports</a></li>
		          <li><a href="#">Project Documents</a></li>
		        </ul>
		      </li>-->
		      <li><a href="{{url('/createWorkshop')}}">Workshops</a></li>
		      <li><a href="{{url('/addToGallery')}}">Gallery</a></li>
		    </ul>
		     <ul class="nav navbar-nav navbar-right">
		      <li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
		      
		    </ul>
		  
		<!--<form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>-->
		   
		  </div>
    </nav>
</div>

<div class="row" style="margin-top:2%">
	 @yield('container')
</div>


 <link href="{{asset('jquery-ui/jquery-ui.css')}}" rel="stylesheet">

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="{{asset('jquery-ui/jquery-ui.js')}}"></script>
    <script>
         $(function() {
            $( "#datepicker-1" ).datepicker();
         });
      </script>
	<!-- //js -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- Slider script -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				$("#slider").responsiveSlides({
					auto: true,
					nav: true,
					manualControls: '#slider3-pager',
				});
			});
		</script>

	<!-- /nav -->
	<script src="js/simplePlayer.js"></script>
	<script>
		$("document").ready(function () {
			$("#video").simplePlayer();
		});
	</script>

	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- //nav -->
	<!-- js for portfolio lightbox -->
	<script src="js/jquery.chocolat.js "></script>
	<link rel="stylesheet " href="css/chocolat.css " type="text/css" media="all" />
	<!--light-box-files -->
	<script type="text/javascript ">
		$(function () {
			$('.portfolio-grids a').Chocolat();
		});
	</script>
	<!-- /js for portfolio lightbox -->
	<!-- requried-jsfiles-for owl -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->

	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	<script>
		$(document).ready(function(){
			$('.dropdown-submenu a.test').on("click",function(e){
				$(this).next('ul').toggle();
				e.stopPropagation();
				e.preventDefault();
			});
		});
	</script>
</body>
</html>