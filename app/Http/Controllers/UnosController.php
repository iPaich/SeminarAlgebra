<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Unos;

class UnosController extends Controller
{
    public function unos()
    {
      $zanr = DB::table('zanr')->pluck('naziv');
      return view('kolekcija.unos',compact('zanr'));
    }

    public function store()
    {
      $unos = new Unos;

      $unos->naslov =request('naslov');
      $unos->id_zanr =request('id_zanr');
      $unos->godina =request('godina');
      $unos->trajanje =request('trajanje');
      $unos->slika =request('slika');

      $unos->save();

      return redirect('unos');



      /*$this->validate($request, [
       'naslov' => 'required|max:255',
       'zanr' => 'required',
       'trajanje' => 'required',
       'godina' => 'required|min:1900|max:date("Y")',
       'slika' => 'required',
   ]);*/

}
}
