<?php //abre a execução da linguagem php

namespace App\Models; //ambiente de trabalho

use Illuminate\Database\Eloquent\Model; //está chamando para ser usada 
// o componente model

class Cliente extends Model // a classe manchete está herdando os metodos da classe model 
{
    protected $fillable = [ //abre uma array fillabe do tipo protegido
        'Nome',
        'Descricao', //os objetos da array
        'Nascimento',
    ];

}
