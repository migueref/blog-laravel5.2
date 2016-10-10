<?php $__env->startSection('title','Crear usuario'); ?>

<?php $__env->startSection('content'); ?>
	
		<?php echo Form::open(['route'=>'admin.users.store','method'=>'POST']); ?>

			<div class="form-group">
				<?php echo Form::label('name','Nombre'); ?>

				<?php echo Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Nombre completo']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::label('email','Correo electrónico'); ?>

				<?php echo Form::email('email',null,['class'=>'form-control','required','placeholder'=>'example@example.com']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::label('password','Contraseña'); ?>

				<?php echo Form::password('password',['class'=>'form-control','required','placeholder'=>'*******']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::label('type','Tipo'); ?>				
				<?php echo Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control','placeholder'=>'Selecciona privilegios de usuario','required']); ?>

			</div>
			<div class="form-group">
				<?php echo Form::submit('Guardar',['class'=>'btn btn-primary']); ?>				
				
			</div>
		<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>