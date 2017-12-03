@extends ('layout')
<!DOCTYPE html>

<html>


  <head>
    <meta charset="utf-8">
    <title>Forma</title>
  </head>
  <body>
      @section ('content')
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
        @foreach($unosi as $key => $value)
        <tr>

            <td><img src= "{{ Storage::url($value->slika) }}" </td>
            <td>{{ $value->naslov }}</td>
            <td>{{ $value->godina }}</td>
            <td>{{ $value->trajanje }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
@endsection
  </body>
</html>

