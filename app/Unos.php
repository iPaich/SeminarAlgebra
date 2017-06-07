<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unos extends Model
{
 protected $table    = 'filmovi';
 protected $primaryKey='id';

 public    $fillable = [
     'naslov',
     'id_zanr',
     'godina',
     'trajanje',
     'slika',
     ];
 
 
 
}
