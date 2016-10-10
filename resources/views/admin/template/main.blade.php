<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Default') | Panel de administración</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen/chosen.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('plugins/Trumbowyg/dist/ui/trumbowyg.css') }}">

		<style>
			 body{
         margin-right: 5%;
           padding-right: 5%;
           padding-left: 5%;

       }
		</style>
    </head>
    <body>
		@include('admin.template.partials.nav')

		<section class="content">
			@include('flash::message')
			@include('admin.template.partials.errors')
			<label>@yield('title','Default')</label>
			@yield('content')
		</section>

		<footer class="footer">


		<div class="navbar navbar-default navbar-absolute-bottom">Desarrollado por: <span><b>Miguel Ángel Rea Flores</b></span></div>

		</footer>

		<script src="{{ asset('plugins/js/jquery-3.1.0.js') }}"></script>
		<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
       	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('plugins/Trumbowyg/dist/trumbowyg.js') }}"></script>
		@yield('js')
    </body>
</html>
