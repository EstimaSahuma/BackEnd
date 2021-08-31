<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pontuacao extends Model
{
    protected $fillable = [
        'codigo', 'mecanica'
    ];

    protected $table = 'pontuacaos';

    public function aluno()
    {
        return $this->belongsTo('App\Aluno');
    }
}
