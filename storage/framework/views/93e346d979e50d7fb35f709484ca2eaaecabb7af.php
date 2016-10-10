<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $__env->yieldContent('title','Default'); ?> | Blog</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.css')); ?>">
        
		<style>
			
		</style>
    </head>
    <body>
		<?php echo $__env->make('admin.template.partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<section>
			Este es mi blog, bienvenido a CyberdreamsChronicles
			<?php echo $__env->yieldContent('content'); ?>
		</section>
		
		<footer class="footer">
		
		
		<div class="navbar navbar-default navbar-fixed-bottom">Desarrollado por: <span><b>Miguel Ángel Rea Flores</b></span></div>
		
		</footer>
		
		<script src="<?php echo e(asset('plugins/js/jquery-3.1.0.js')); ?>"></script>
       	<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.js')); ?>"></script>
    </body>
</html>
