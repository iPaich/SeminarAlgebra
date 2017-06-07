
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Forma</title>
  </head>
  <body>
    <?php echo e(Form::open(array('url' => 'unos', 'files' => true))); ?>


    <div class="form-group">
        <?php echo e(Form::label('naslov', 'Naslov')); ?>

        <?php echo e(Form::text( 'naslov', Input::old('naslov'), array('class' => 'form-control'))); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('zanr', 'Žanr')); ?>

        <?php echo e(Form::text( 'zanr', Input::old('zanr'), array('class' => 'form-control'))); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('godina', 'Godina')); ?>

        <?php echo e(Form::text( 'godina', Input::old('godina'), array('class' => 'form-control'))); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('trajanje', 'Trajanje')); ?>

        <?php echo e(Form::text( 'trajanje', Input::old('trajanje'), array('class' => 'form-control'))); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('slika', 'Slika')); ?>

        <?php echo e(Form::text( 'slika', Input::old('slika'), array('class' => 'form-control'))); ?>

    </div>

    <?php echo e(Form::submit('Submit')); ?>


    <?php echo e(Form::close()); ?>

  </body>
</html>
