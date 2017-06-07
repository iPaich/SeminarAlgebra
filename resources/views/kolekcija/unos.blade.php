
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
        {{ Form::select('id_zanr', $zanr) }}
      </div>
      <div class="form-group">
          {{ Form::label('godina', 'Godina:') }}
          {{ Form::selectRange('godina', 1900, 2017) }}
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
        @foreach($unosi as $key => $value)
        <tr>
            

            <td><?php echo '<img src="data:image/jpg;base64,'.base64_encode( $value->slika ).'"/>'; ?></td>
            <td>{{ $value->naslov }}</td>
            <td>{{ $value->godina }}</td>
            <td>{{ $value->trajanje }}</td>
            <td>{{ $value->slika }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

    
  </body>
</html>
