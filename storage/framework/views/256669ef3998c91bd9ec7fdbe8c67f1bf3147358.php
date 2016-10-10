
<?php $__env->startSection('title',$article->title); ?>

<?php $__env->startSection('content'); ?>
  <h1 class="title-front left"><?php echo e($article->title); ?></h1>

<div class="row">
  <div class="col-sm-8 col-xs-12">
    <div class="fondo-articulo">
<?php echo $article->content; ?>

    </div>
    <h3>Comentarios</h3>
    <?php foreach($article->tags as $tag): ?>
      <?php echo e($tag->name); ?>

    <?php endforeach; ?>
    <div id="disqus_thread"></div>
    <script>
        (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = '//cyberdreamschronicles.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
        })();
    </script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  </div>
  <div class="col-sm-4 col-xs-12 aside">
      <?php echo $__env->make('front.template.partials.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>