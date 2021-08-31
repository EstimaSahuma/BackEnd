<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcao extends Model
{
    protected $fillable = [
        'resposta', 'pergunta_id','avatar', 'status'
    ];

    protected $table = 'opcaos';

    public function pergunta()
    {
        return $this->belongsTo('App\Pergunta');
    }
}
