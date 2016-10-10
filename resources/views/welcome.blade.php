<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Default') | Blog</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
        
		<style>
			
		</style>
    </head>
    <body>
		@include('admin.template.partials.nav')
		
		<section>
			Este es mi blog, bienvenido a CyberdreamsChronicles
			@yield('content')
		</section>
		
		<footer class="footer">
		
		
		<div class="navbar navbar-default navbar-fixed-bottom">Desarrollado por: <span><b>Miguel Ángel Rea Flores</b></span></div>
		
		</footer>
		
		<script src="{{ asset('plugins/js/jquery-3.1.0.js') }}"></script>
       	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    </body>
</html>
