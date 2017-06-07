
<!DOCTYPE html>

<html>


  <head>
    <meta charset="utf-8">
    <title>Forma</title>
  </head>
  <h1> Forma </h1>
  <body>
    {{ Form::open(array('url' => 'unos', 'files' => true)) }}

    <form method="POST" action="/unos">

      <div class="form-group">
          {{ Form::label('naslov', 'Naslov:') }}
          {{ Form::text( 'naslov', Input::old('naslov'), array('class' => 'form-control')) }}
      </div>

      <div class="form-group">
        {{ Form::label('id_zanr', 'Žanr:') }}
        {{ Form::select('id_zanr', $zanr,1) }}
      </div>
      <div class="form-group">
          {{ Form::label('godina', 'Godina:') }}
          {{ Form::number( 'godina', Input::old('godina'), array('class' => 'form-control')) }}
      </div>
      <div class="form-group">
          {{ Form::label('trajanje', 'Trajanje:') }}
          {{ Form::number( 'trajanje', Input::old('trajanje'), array('class' => 'form-control')) }}
      </div>
      <div class="form-group">
          {{ Form::label('slika', 'Slika:') }}
          {{ Form::file( 'slika', Input::old('slika'), array('class' => 'form-control')) }}
      </div>

      {{ Form::submit('Pošalji'), array('class' => 'btn btn-primary') }}


    </form>


    {{ Form::close() }}
  </body>
</html>
