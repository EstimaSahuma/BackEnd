<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'apelido',
        'sexo',
        'idade',
        'user'
    ];

    protected $table = 'alunos';

    public function pontuacao()
    {
        return $this->hasMany('App\Pontuacao');
    }
}
