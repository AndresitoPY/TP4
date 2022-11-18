<?php

namespace App\Repositories;

use App\Models\Curso;
use App\Repositories\BaseRepository;

/**
 * Class CursoRepository
 * @package App\Repositories
 * @version November 17, 2022, 7:36 pm UTC
*/

class CursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'estado'
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
        return Curso::class;
    }
}
