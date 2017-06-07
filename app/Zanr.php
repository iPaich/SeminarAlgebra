<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zanr extends Model
{
 protected $table    = 'zanr';
 protected $primaryKey='id';

 public    $fillable = [
     'naziv',
     ];
}
