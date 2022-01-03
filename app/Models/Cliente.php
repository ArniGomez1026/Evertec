<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = [
       
        'documento',
        'name',
        'apellidos',
        'doc_id',
        'dirección',
        'celular',
        'fijo',
        'estado'
   
       
    ]; 
}
