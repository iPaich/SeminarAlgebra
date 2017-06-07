
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Forma</title>
  </head>
  <body>
    {{ Form::open(array('url' => 'unos', 'files' => true)) }}

    <div class="form-group">
        {{ Form::label('naslov', 'Naslov') }}
        {{ Form::text( 'naslov', Input::old('naslov'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('zanr', 'Žanr') }}
        {{ Form::text( 'zanr', Input::old('zanr'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('godina', 'Godina') }}
        {{ Form::text( 'godina', Input::old('godina'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('trajanje', 'Trajanje') }}
        {{ Form::text( 'trajanje', Input::old('trajanje'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('slika', 'Slika') }}
        {{ Form::text( 'slika', Input::old('slika'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Submit') }}

    {{ Form::close() }}
  </body>
</html>
