<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{

    protected $fillable = [
        'nome',
        'sobrenome',
        'data_nascimento',
        'endereco',
        'email',
    ];


    use HasFactory;
}
