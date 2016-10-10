<?php $__env->startSection('title','Lista de tags'); ?>

<?php $__env->startSection('content'); ?>
	<a href="<?php echo e(route('admin.tags.create')); ?> " class="btn btn-info">Registrar nueva Tag</a><hr>
	<!--Buscador de tags-->
		
		<?php echo Form::open(['route'=>'admin.tags.index','method'=>'GET','class'=>'navbar-form pull-right']); ?>

			<div class="input-group">
				<?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar tag','aria-describedby'=>'search']); ?>

				<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"aria-hidden="true"></span></span>				
			</div>
		<?php echo Form::close(); ?>

	<!--Fin Buscador de tags-->
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			
		</thead>
		<tbody>
			<?php foreach($tags as $tag): ?>
				<tr>
					<td><?php echo e($tag->id); ?> </td>
					<td><?php echo e($tag->name); ?> </td>
					
					
					<td> <a href="<?php echo e(route('admin.tags.edit',$tag->id)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Modificar</a> <a href="<?php echo e(route('admin.tags.destroy',$tag->id)); ?>" onclick ="return confirm('¿Seguro que desea eliminar?')"class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true">Eliminar</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $tags->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>