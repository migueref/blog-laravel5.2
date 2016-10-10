<?php $__env->startSection('title','Lista de categories'); ?>

<?php $__env->startSection('content'); ?>
	<a href="<?php echo e(route('admin.categories.create')); ?> " class="btn btn-info">Registrar nueva categoría</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			
		</thead>
		<tbody>
			<?php foreach($categories as $category): ?>
				<tr>
					<td><?php echo e($category->id); ?> </td>
					<td><?php echo e($category->name); ?> </td>
					
					
					<td> <a href="<?php echo e(route('admin.categories.edit',$category->id)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Modificar</a> <a href="<?php echo e(route('admin.categories.destroy',$category->id)); ?>" onclick ="return confirm('¿Seguro que desea eliminar?')"class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true">Eliminar</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $categories->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>