<?php

namespace App\Models\Modulos;

use Illuminate\Database\Eloquent\Model;
use App\Models\Campos\Campo;

class Modulo extends Model
{
    //
    protected $fillable = ['id','nome','descricao','controller','tabela','icone'];


    public function campos(){

        return $this->hasMany(Campo::class);
    }
}
