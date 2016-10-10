<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<title><?php echo e($article->title); ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/general.css')); ?>">
</head>
<body>
	Hola, bienvenido:<br/><br/>
	<h1><?php echo e($article->title); ?></h1>

	<hr/> 
	<?php echo e($article->content); ?>

	<hr/>
	<?php echo e($article->user->name); ?> | <?php echo e($article->category->name); ?>

	<br/>
	Tags:
	<?php foreach($article->tags as $tag): ?>
		<?php echo e($tag->name. ","); ?>

	<?php endforeach; ?>
</body>



</html>