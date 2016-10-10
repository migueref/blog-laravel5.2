<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $__env->yieldContent('title','Default'); ?> | Blog</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.css')); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/chosen/chosen.css')); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/Trumbowyg/dist/ui/trumbowyg.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/font-awesome/css/font-awesome.min.css')); ?>">

		<style>
			 body{
         margin-right: 5%;
           padding-right: 5%;
           padding-left: 5%;

       }
		</style>
    </head>
    <body>
		<?php echo $__env->make('front.template.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<section class="content">
			<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->make('front.template.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<label><?php echo $__env->yieldContent('title','Default'); ?></label>
			<?php echo $__env->yieldContent('content'); ?>
		</section>

		<footer class="footer">


		<div class="navbar navbar-default navbar-absolute-bottom">Desarrollado por: <span><b>Miguel Ángel Rea Flores</b></span></div>

		</footer>

		<script src="<?php echo e(asset('plugins/js/jquery-3.1.0.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins/chosen/chosen.jquery.js')); ?>"></script>
       	<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins/Trumbowyg/dist/trumbowyg.js')); ?>"></script>
		<?php echo $__env->yieldContent('js'); ?>
    </body>
</html>
