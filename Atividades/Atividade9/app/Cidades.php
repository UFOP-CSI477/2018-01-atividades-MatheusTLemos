<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    public $timestamps = false; 
    protected $fillable = ['nome', 'estado_id'];
}
