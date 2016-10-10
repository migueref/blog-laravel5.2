

<?php $__env->startSection('title','Blog'); ?>

<?php $__env->startSection('content'); ?>
<hr>
<h1>
<?php echo e(trans('app.title_last_articles')); ?>

</h1>
<h2><?php echo e(trans('app.test',['name'=>'Miguel'])); ?></h2>
<div class="row">
  <div class="col-xs-8">


  <?php foreach($articles as $article): ?>
  <div class="col-sm-6 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-body">
          <a href="<?php echo e(route('front.view.article',$article->slug)); ?>" class"thumbnail">
            <?php foreach($article->images as $image): ?>
              <img src="<?php echo e(asset('images/articles/'.$image->name)); ?>" style="width:400px;height:400px;"class="img-responsive img-article" alt="" />
            <?php endforeach; ?>

          </a>
            <a href="<?php echo e(route('front.view.article',$article->slug)); ?>" ><h3 class="text-center"><?php echo e($article->title); ?></h3></a>
          <hr>
          <i class="fa fa-folder-open-o"></i><a href="<?php echo e(route('front.search.category',$article->category->name)); ?>"><?php echo e($article->category->name); ?></a>
          <div class="pull-right">
            <i class="fa fa-clock-o"></i><?php echo e($article->created_at->diffForHumans()); ?>

          </div>
        </div>
    </div>
  </div>
  <?php endforeach; ?>
  </div>
  <div class="col-sm-4 col-xs-12 aside">
      <?php echo $__env->make('front.template.partials.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
</div>

	<?php echo $articles->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>