<?php
namespace App\Http\Controllers;

use App\Unos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\Console\Input\Input;
use App\Http\Controllers\Controller;

class UnosController extends Controller
{
    public function unos()
    {
      $zanr = DB::table('zanr')->pluck('naziv');
      return view('kolekcija.unos',compact('zanr'));
    }

    public function store()
    {
      /* $this->validate(request(), [
        'naslov' => 'required',
        'id_zanr' => 'required',
        'godina' => 'required|max:2017|min:1900',
        'trajanje' => 'required',
        'slika' => 'required'

    ]); */

    $path=request()->file('slika')->store('public/slike');

      $unos = new Unos;

      $unos->naslov =request('naslov');
      $unos->id_zanr =request('id_zanr')+1;
      $unos->godina =request('godina');
      $unos->trajanje =request('trajanje');
      $unos->slika= $path;
      //$unos->slika =request('slika');

      $unos->save();


      return redirect('unos');

}

public function destroy($id)
{
    $item = DB::findOrFail($id);
    $item->delete();

    return Redirect::route('/unos');
}

}
