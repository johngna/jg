<?php

namespace App\Models\Campos;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
    //
    protected $fillable = ['id','nome','label','tipo','form','grid','obrigatorio','opcoes','observações','tamanho','ordem','valor_padrao','desabilitado','somente_leitura','classe','style','onclick','modulo_id','updated_at','deleted_at','created_at'];
}
