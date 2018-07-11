<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    public $timestamps = false; 
    protected $fillable = ['nome', 'mail', 'rua','numero','bairro','cidade_id','cep']; 
}
