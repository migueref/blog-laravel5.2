
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Blog </title>

    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/bootstrap.min.css') }}">

    <!-- Template styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/style.css') }}">

    <!-- Responsive styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/responsive.css') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/font-awesome.min.css') }}">

    <!-- Animation -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/bootstrap/animate.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/colorbox.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen/chosen.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/Trumbowyg/dist/ui/trumbowyg.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
    <body>
		@include('front.template.partials.nav')

		<section class="content">
			@include('flash::message')
			@include('front.template.partials.errors')
      <section id="main-container" class="main-container">
        <div class="container">
          @yield('content')
        </div>
      </section>

		</section>

    <footer id="footer" class="footer">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-4">
  					<div class="action-box text-center">
  						<span class="action-box-icon">
  							<i class="fa fa-envelope"></i>
  						</span>
  						<div class="action-box-content">
  							<h3>General Queries</h3>
  							<p class="action-box-text">contact-query@evntime.co.us</p>
  						</div>
  					</div><!-- Action box 1 end -->
  				</div><!-- Col 1 end -->

  				<div class="col-md-4">
  					<div class="action-box text-center">
  						<span class="action-box-icon">
  							<i class="fa fa-ticket"></i>
  						</span>
  						<div class="action-box-content">
  							<h3>Ticket Queries</h3>
  							<p class="action-box-text">support-ticket@evntime.co.us</p>
  						</div>
  					</div><!-- Action box 2 end -->
  				</div><!-- Col 2 end -->

  				<div class="col-md-4">
  					<div class="action-box text-center">
  						<span class="action-box-icon">
  							<i class="fa fa-phone"></i>
  						</span>
  						<div class="action-box-content">
  							<h3>Event Organiser</h3>
  							<p class="action-box-text">+78(35) 7866 534</p>
  						</div>
  					</div><!-- Action box 3 end -->
  				</div><!-- Col 3 end -->

  			</div><!-- Row 1 end -->

  			<div class="row">
  				<div class="newsletter-form clearfix">
  					<h3>Stay Updated - Join Our Newsletter</h3>
  					<form action="#" method="post">
  						<div class="form-group">
  							<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Your Email Here" autocomplete="off">
  							<button class="btn btn-primary">Subscribe</button>
  						</div>
  					</form>
  				</div>
  			</div><!-- Row end -->

  		</div><!-- Container 1 end -->

  		<div class="copyright text-center">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-12">
  						<div class="footer-social">
  							<ul>
  								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
  								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
  							</ul>
  						</div><!-- Footer social end -->

  						<div class="copyright-info">
  							<span>Copyright © 2016 Eventime. All Rights Reserved.</span>
  						</div><!-- Copyright info end -->

  						<div class="footer-menu">
  							<ul class="nav unstyled">
  								<li><a href="#">About</a></li>
  								<li><a href="#">Speakers</a></li>
  								<li><a href="#">Become a Sponsor</a></li>
  								<li><a href="#">Register</a></li>
  								<li><a href="#">Videos</a></li>
  							</ul>
  						</div><!-- Footer menu end -->

  					</div><!-- Col end -->

  				</div><!-- Copyright Row end -->

  				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
  					<button class="btn btn-primary" title="Back to Top">
  						<i class="fa fa-angle-double-up"></i>
  					</button>
  				</div>
  			</div><!-- Copyright Container end -->
  		</div><!-- Copyright end -->



  	</footer><!-- Footer end -->


	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="{{ asset('template/js/jquery.js') }}"></script>
	<!-- Bootstrap jQuery -->
  <script type="text/javascript" src="{{ asset('template/js/bootstrap.min.js') }}"></script>
	<!-- Counter -->
  <script type="text/javascript" src="{{ asset('template/js/jquery.counterup.min.js') }}"></script>

	<!-- Waypoints -->
  <script type="text/javascript" src="{{ asset('template/js/waypoints.min.js') }}"></script>

	<!-- Color box -->
  <script type="text/javascript" src="{{ asset('template/js/jquery.colorbox.js') }}"></script>

	<!-- Template custom -->
  <script type="text/javascript" src="{{ asset('template/js/custom.js') }}"></script>


		<script src="{{ asset('plugins/js/jquery-3.1.0.js') }}"></script>
		<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
       	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('plugins/Trumbowyg/dist/trumbowyg.js') }}"></script>
		@yield('js')
    </body>
</html>
