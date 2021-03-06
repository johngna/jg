<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use App\Models\Modulos\Modulo;

class Cliente extends Model
{
    //
    protected $dates = ['created_at','updated_at','deleted_at'];
    //Permitir a alteração em massa dos campos
    protected $guarded = ['id'];
    //Sobrescrever o método para exibir os campos pois ao usar o guarded ele não exibe por padrão
    public function GetFillable()
    {
        $fillable = Schema::getColumnListing($this->getTable());
        return $fillable;
    }

    public function GetCampos()
    {

      $campos =   Modulo::where('tabela', $this->getTable())->get()[0]->campos->toArray();

      return $campos;
    }


}
