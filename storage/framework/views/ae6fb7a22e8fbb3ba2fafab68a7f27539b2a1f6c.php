<?php $__env->startSection('title','Lista de articles'); ?>

<?php $__env->startSection('content'); ?>
	<a href="<?php echo e(route('admin.articles.create')); ?> " class="btn btn-info">Registrar nuevo article</a><hr>
	<!--Buscador de articles-->
		
		<?php echo Form::open(['route'=>'admin.articles.index','method'=>'GET','class'=>'navbar-form pull-right']); ?>

			<div class="input-group">
				<?php echo Form::text('title',null,['class'=>'form-control','placeholder'=>'Buscar article','aria-describedby'=>'search']); ?>

				<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"aria-hidden="true"></span></span>				
			</div>
		<?php echo Form::close(); ?>

	<!--Fin Buscador de articles-->
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Título</th>
			<th>Categoría</th>
			<th>User</th>
			<th>Acción</th>
		</thead>
		<tbody>
			<?php foreach($articles as $article): ?>
				<tr>
					<td><?php echo e($article->id); ?> </td>
					<td><?php echo e($article->title); ?> </td>
					<td><?php echo e($article->category->name); ?> </td>
					<td><?php echo e($article->user->name); ?> </td>
					
					
					<td> <a href="<?php echo e(route('admin.articles.edit',$article->id)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Modificar</a> <a href="<?php echo e(route('admin.articles.destroy',$article->id)); ?>" onclick ="return confirm('¿Seguro que desea eliminar?')"class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true">Eliminar</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $articles->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>