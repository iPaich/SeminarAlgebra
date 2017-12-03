<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Unos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function redirect;
use function request;
use function view;


class DobarController extends Controller
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
public function index()
    {
        return View::make('dobar.index');
    }

public function show($first)
{
    $a = DB::table('filmovi')->where('naslov','LIKE',$first.'%');
    return view('kolekcija.index',compact('a'));
}

public function destroy($id)
{
    $item = DB::table('filmovi')->where('id',$id);
    $item->delete();

    return redirect('unos');
}
}
