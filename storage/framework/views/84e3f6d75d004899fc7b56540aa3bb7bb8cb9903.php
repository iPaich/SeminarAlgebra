 
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Forma</title>
  </head>
  <body>
    <?php echo $__env->yieldContent('content'); ?>
  </body>
</html>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>