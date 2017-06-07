
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

        <?php echo e(Form::select('id_zanr', $zanr,1)); ?>

      </div>
      <div class="form-group">
          <?php echo e(Form::label('godina', 'Godina:')); ?>

          <?php echo e(Form::number( 'godina', Input::old('godina'), array('class' => 'form-control'))); ?>

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

  </body>
</html>
