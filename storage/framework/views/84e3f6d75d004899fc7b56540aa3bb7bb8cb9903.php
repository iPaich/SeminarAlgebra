<!DOCTYPE html>

<html>


  <head>
    <meta charset="utf-8">
    <title>Forma</title>
  </head>
  <body>
      <?php $__env->startSection('content'); ?>
      <div class="container">
          <br>






 <?php
 foreach (range('A', 'Z') as $char) {
    // echo " <a href={{route('show')}}>$char</a>";
    $b= action('DobarController@show', ['first' => $char]);
    echo " <a href= $b >$char</a> ";
}
 //$unosi = \Illuminate\Support\Facades\DB::table('filmovi')->get();

$c= url()->current();
$c= substr($c, -1);
$unosi = \Illuminate\Support\Facades\DB::table('filmovi')->where('naslov','LIKE',$c.'%')->get();
?>
          
    <br>      <a href="/unos">Unesi novi film</a>
  <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Slika</th>
            <th>Naslov filma</th>
            <th>Godina</th>
            <th>Trajanje</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $unosi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td><img src= "<?php echo e(Storage::url($value->slika)); ?>" </td>
            <td><?php echo e($value->naslov); ?></td>
            <td><?php echo e($value->godina); ?></td>
            <td><?php echo e($value->trajanje); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
    </div>
<?php $__env->stopSection(); ?>
  </body>
</html>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>