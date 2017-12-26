<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model {

    protected $fillable = [
        'nome',
        'cpf',
        'endereco',
    ];

}
