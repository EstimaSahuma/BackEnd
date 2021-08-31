<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    protected $fillable = [
        'pergunta', 'categoria', 'avatar', 'referencia'
    ];

    protected $table = 'perguntas';

    public function opcao()
    {
        return $this->hasMany('App\Opcao');
    }
}
