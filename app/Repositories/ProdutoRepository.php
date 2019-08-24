<?php

namespace App\Repositories;

use App\Models\Produto;
use App\Repositories\BaseRepository;

/**
 * Class ProdutoRepository
 * @package App\Repositories
 * @version August 1, 2019, 9:25 am -03
*/

class ProdutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'preco',
        'custo',
        'descricao',
        'codigo_ean'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Produto::class;
    }
}
