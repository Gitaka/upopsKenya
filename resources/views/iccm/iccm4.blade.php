
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>UPOP</title>

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
         <span style="color:#006400">Email: upop.environment.go.ke</span>
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

<div class="main_section_agile nav-main-style" id="home">
		<div class="agileits_w3layouts_banner_nav">

			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="#" style="color:#fff"> <span>U</span>POP<small style="color:#fff">s</small></a></h1>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu-hover-effect menu-hover-effect-4">
						<ul class="nav navbar-nav">
							<li ><a href="{{url('/')}}" class="hvr-ripple-in"> Home</a></li>
						    <li class="dropdown">
								<a href="{{url('overview')}}" class="dropdown-toggle hvr-ripple-in" data-toggle="dropdown">About <b class="fa fa-caret-down" aria-hidden="true"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="{{url('overview')}}">Overview</a></li>
									<li><a href="{{url('faq')}}">Functions & FAQ</a></li>
									
								</ul>
							</li>

						 <li class="dropdown active">
								<a href="{{url('overview')}}" class="dropdown-toggle hvr-ripple-in" data-toggle="dropdown">SAICM <b class="fa fa-caret-down" aria-hidden="true"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="{{url('kncp')}}">KNCP</a></li>
									<li><a href="{{url('ksip')}}">KSIP</a></li>
									 <li class="dropdown-submenu">
                                       <a class="test" tabindex="-1" href="#">ICCM<span class="fa fa-caret-right"></span></a>
                                       <ul class="dropdown-menu agile_short_dropdown">
                                       	<li><a tabindex="-1" href="{{url('iccm1')}}">ICCM1</a></li>
                                       <li><a tabindex="-1" href="{{url('iccm2')}}">ICCM2</a></li>
                                      <li><a tabindex="-1" href="{{url('iccm3')}}">ICCM3</a></li>
                                       <li><a tabindex="-1" href="{{url('iccm4')}}">ICCM4</a></li>
                                       
                                       </ul>
                                    </li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hvr-ripple-in" data-toggle="dropdown">MEAS <b class="fa fa-caret-down" aria-hidden="true"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
								    <li><a href="{{url('saicm')}}">SAICM</a></li>

									<li><a href="{{url('stockholm')}}">Stockholm</a></li>
									<li><a href="{{url('rotterdam')}}">Rotterdam</a></li>
									<li><a href="{{url('basel')}}">Basel</a></li>
									<li><a href="{{url('minamata')}}">MinaMata</a></li>
									<li><a href="{{url('keActivities')}}">Kenya Activities</a></li>
									
								</ul>
							</li>
					       <li class="dropdown">
								<a href="#" class="dropdown-toggle hvr-ripple-in" data-toggle="dropdown">Financial & Technical Asst<b class="fa fa-caret-down" aria-hidden="true"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									 <li class="dropdown-submenu">
                                       <a class="test" tabindex="-1" href="#">Projects<span class="fa fa-caret-right"></span></a>
                                       <ul class="dropdown-menu agile_short_dropdown">
                                       	<li><a tabindex="-1" href="{{url('upops')}}">UPOPS</a></li>
                                       <li><a tabindex="-1" href="{{url('mercury')}}">Mercury Documents</a></li>
                                       <li><a tabindex="-1" href="{{url('goldchild')}}">Gold Child</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="{{url('gef')}}">Global Environment Facility</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hvr-ripple-in" data-toggle="dropdown">National Archives<b class="fa fa-caret-down" aria-hidden="true"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
								     <li class="dropdown-submenu">
                                       <a class="test" tabindex="-1" href="#">Industry<span class="fa fa-caret-right"></span></a>
                                       <ul class="dropdown-menu agile_short_dropdown">
                                       	<li><a tabindex="-1" href="{{url('industryprojects')}}">Projects</a></li>
                                       <li><a tabindex="-1" href="{{url('industryworkshops')}}">Workshops</a></li>
                                       
                                       </ul>
                                    </li>
                                     <li class="dropdown-submenu">
                                       <a class="test" tabindex="-1" href="#">Agro<span class="fa fa-caret-right" aria-hidden="true"></span></a>
                                       <ul class="dropdown-menu agile_short_dropdown">
                                       	<li><a tabindex="-1" href="{{url('agroprojects')}}">Projects</a></li>
                                       <li><a tabindex="-1" href="{{url('agroworkshops')}}">Workshops</a></li>
                                       
                                       </ul>
                                    </li>
									
                                    <li class="dropdown-submenu">
                                       <a class="test dropdown-toggle hvr-ripple-in" tabindex="-1" href="#" aria-hidden="true">Others<span></span></a>
                                    
                                    </li>
								</ul>
							</li>
							<li><a href="{{url('contactUs')}}" class="hvr-ripple-in">Contact Us</a></li>
						</ul>
					</nav>

				</div>
			</nav>
			<div class="clearfix"> </div>
		</div>
	</div>

<div class="row overview-container">
    <div class="col-sm-3">
    	<div class="projects">
    		<h3 style="color:#b52e31">Provisional Agenda</h3></br>
    		<p>
              Provisional Agenda.
    		</p>
    	</div>
    	  <div class="projects">
    		<h3 style="color:#b52e31">Meeting Documents</h3></br>
    		<a href="#"><img src="{{asset('images/iccm4.jpg')}}" width="100" height="100" data-selector="img" alt=""></a>
            <p class="p-style">
       	     <span><a href="downloads/k1501977 saicm-iccm4-1-e.pdf" download></span>Provisional Agenda.</a></p>
    	</div>
    </div>
    <div class="col-sm-6">
	<div class="functions">
		<h2 style="padding-bottom:1%;color:#006400;">Fourth session of the International Conference on Chemicals Management (ICCM4)</h2>
        <h3>Overview</h3>
        <h5>Geneva, Switzerland, 28 September - 2 October 2015</h5></br>
        <p>ICCM4 marked a major milestone as it was the last decision-making meeting in the context of the Strategic Approach scheduled to take place before 2020. Stakeholders were invited to make full use of the Conference to identify the remaining challenges and adopt strategic decisions to enable the international community to achieve the 2020 goal of the Johannesburg Plan of Implementation.</p>
        <p>
The Conference evaluated regional and sectoral implementation, addressed emerging policy issues, discussed sound management of chemicals in the context of the sustainable development goals and beyond 2020. ICCM4 featured a high-level segment, incorporating opportunities for formal statements, as well as other special events. The working languages for the fourth session of the Conference was Arabic, Chinese, English, French, Russian and Spanish. The session opened at 1 p.m. on Monday, 28 September 2015. Regional and sectoral meetings took place on the morning of Monday 28 September 2015.
        </p>
           <br>
          <h5>Download document on: 
            <a href="downloads/ICCM3 1 prov agenda E.pdf" download style="color:red"></span>Report of the International Conference on Chemicals Management on the work of its first session.</a>
           
          </h5>
	</div>  

 	
    </div>
    <div class="col-sm-3 useful-sidebar">
	   <h3 style="color:#b52e31">Useful Links</h3></br>
       <div class="downloads-content">
           
       	   <p class="p-style">
       	     <span><a href="http://www.saicm.org/About/ICCM/ICCM4/tabid/5464/language/en-US/Default.aspx"></span>ICCM4 - Fourth session of the International Conference on Chemicals Management - Geneva, Switzerland, 28 September - 2 October 2015.</a></p>
       </div>
        <div class="downloads-content">
       	   <p class="p-style">
       	     <span><a href="http://www.saicm.org/About/ICCM/ICCM3/tabid/5963/language/en-US/Default.aspx"></span>ICCM3 - Third session of the International Conference on Chemicals Management - Nairobi, Kenya, 17-21 September 2012.</a></p>
       </div>
       <div class="downloads-content">
       	   <p class="p-style">
       	     <span><a href="http://www.saicm.org/About/ICCM/ICCM2/tabid/5966/language/en-US/Default.aspx"></span>ICCM2 - Second session of the International Conference on Chemicals Management - Geneva, Switzerland, 11-15 May 2009.</a></p>
       </div>
        <div class="downloads-content">
       	   <p class="p-style">
       	     <span><a href="http://www.saicm.org/About/ICCM/ICCM2/tabid/5980/language/en-US/Default.aspx"></span>ICCM1 - First session of the International Conference on Chemicals Management - Dubai, United Arab Emirates, 4-6 February 2006</a></p>
       </div>
               <div class="downloads-content">
       	   <p class="p-style">
       	     <span><a href="http://www.saicm.org/About/OEWG/OEWGmeetings/tabid/5984/language/en-US/Default.aspx"></span>Open-ended Working Group meetings - Documents and reports</a></p>
       </div>
       <div class="downloads-content">
       	   <p class="p-style">
       	     <span><a href="http://www.mercuryconvention.org/Implementationsupport/Publications/tabid/3429/language/en-US/Default.aspx"></span>Minamata publications -  reports on various implementations on mercury.</a></p>
       </div>
    </div>

</div>


	<div class="footer">
		<div class="f-bg-w3l">
			<div class="container">
				<div class="col-md-4 w3layouts_footer_grid">
				<div>
					<h2>Contact Details</h2>
					<h6><span style="padding-left:2%"><i class="fa fa-map-marker ic-style">&nbsp;</i>
                    <span style="color:#fff">Nhif building,Rigati Road.</span></h4>
					<h6>
						<span style="padding-left:2%"><i class="fa fa-phone ic-style">&nbsp;</i>
                        <span style="color:#fff">Phone: +254 202730808, +254 20 2725707</span>
					</h6>
                     <h6>
						<span style="padding-left:2%"><i class="fa fa-envelope  ic-style">&nbsp;</i>
                        <span style="color:#fff">Email: upop.environment.go.ke </span>
					</h6>
				</div></br>
				   <div>
					<h2>Follow <span>Us</span></h2>
					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
					</div>
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h2>External Links</h2>
					<ul class="links-style" >
						<li><a href="http://www.environment.go.ke/">Ministry of Environment</a></li>
						<li><a href="http://www.saicm.org">SAICM</a></li>
					   <li><a href="http://web.unep.org">UNEP</a></li>
					   <li><a href="https://www.nema.go.ke/">NEEMA</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
					<ul class="w3l_footer_nav">
						<li><a href="#" class="active">Home</a></li>
						<li><a href="#">Contact</a></li>
					   <li><a href="#">About</a></li>
					   <li><a href="#">Programs</a></li>
					</ul>
					<p>© 2017 UPOPS. All Rights Reserved</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->






<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
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