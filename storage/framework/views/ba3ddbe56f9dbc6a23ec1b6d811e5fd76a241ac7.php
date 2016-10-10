<?php $__env->startSection('title','Lista de usuarios'); ?>

<?php $__env->startSection('content'); ?>
	<a href="<?php echo e(route('admin.users.create')); ?> " class="btn btn-info">Registrar nuevo usuario</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Email</th>
			<th>Acción</th>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
				<tr>
					<td><?php echo e($user->id); ?> </td>
					<td><?php echo e($user->name); ?> </td>
					<td>
						<?php if($user->type=='admin'): ?>
							<span class="label label-danger"><?php echo e($user->type); ?> </span>
						<?php else: ?>
							<span class="label label-primary"><?php echo e($user->type); ?> </span>
						<?php endif; ?>
					 </td>
					<td><?php echo e($user->email); ?> </td>
					<td> <a href="<?php echo e(route('admin.users.edit',$user->id)); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true">Modificar</a> <a href="<?php echo e(route('admin.users.destroy',$user->id)); ?>" onclick ="return confirm('¿Seguro que desea eliminar?')"class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true">Eliminar</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $users->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>