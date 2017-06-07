
<!DOCTYPE html>

<html>


  <head>
    <meta charset="utf-8">
    <title>Forma</title>
  </head>
  <h1> Forma </h1>
  <body>
    <?php echo e(Form::open(array('url' => 'unos', 'files' => true))); ?>


    <form method="POST" action="/unos">

      <div class="form-group">
          <?php echo e(Form::label('naslov', 'Naslov:')); ?>

          <?php echo e(Form::text( 'naslov', Input::old('naslov'), array('class' => 'form-control'))); ?>

      </div>

      <div class="form-group">
        <?php echo e(Form::label('id_zanr', 'Žanr:')); ?>

        <?php echo e(Form::select('id_zanr', $zanr)); ?>

      </div>
      <div class="form-group">
          <?php echo e(Form::label('godina', 'Godina:')); ?>

          <?php echo e(Form::selectRange('godina', 1900, 2017)); ?>

      </div>
      <div class="form-group">
          <?php echo e(Form::label('trajanje', 'Trajanje:')); ?>

          <?php echo e(Form::number( 'trajanje', Input::old('trajanje'), array('class' => 'form-control'))); ?>

      </div>
      <div class="form-group">
          <?php echo e(Form::label('slika', 'Slika:')); ?>

          <?php echo e(Form::file( 'slika', Input::old('slika'), array('class' => 'form-control'))); ?>

      </div>

      <?php echo e(Form::submit('Pošalji'), array('class' => 'btn btn-primary')); ?>



    </form>


    <?php echo e(Form::close()); ?>

    
 <?php $unosi = \Illuminate\Support\Facades\DB::table('filmovi')->get(); ?>

  <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Slika</th>
            <th>Naslov filma</th>
            <th>Godina</th>
            <th>Trajanje</th>
            <th>Akcija</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $unosi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            

            <td><?php echo '<img src="data:image/jpg;base64,'.base64_encode( $value->slika ).'"/>'; ?></td>
            <td><?php echo e($value->naslov); ?></td>
            <td><?php echo e($value->godina); ?></td>
            <td><?php echo e($value->trajanje); ?></td>
            <td><?php echo e($value->slika); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

    
  </body>
</html>
