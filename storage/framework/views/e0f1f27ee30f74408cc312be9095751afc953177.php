<?php $__env->startSection('title','Editar usuario '.$user->name); ?>

<?php $__env->startSection('content'); ?>
		<?php echo Form::open(['route' => ['admin.users.update',$user->id], 'method'=>'PUT']); ?>

			<div class="form-group">
				<?php echo Form::label('name','Nombre'); ?>

				<?php echo Form::text('name',$user->name,['class'=>'form-control','required','placeholder'=>'Nombre completo']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::label('email','Correo electrónico'); ?>

				<?php echo Form::email('email',$user->email,['class'=>'form-control','required','placeholder'=>'example@example.com']); ?>

			</div>
			
			<div class="form-group">
				<?php echo Form::label('type','Tipo'); ?>				
				<?php echo Form::select('type',[''=>'Selecciona privilegios de usuario','member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::submit('Guardar',['class'=>'btn btn-alert']); ?>				
				
			</div>
		<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>