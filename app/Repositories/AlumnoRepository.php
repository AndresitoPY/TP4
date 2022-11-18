<?php

namespace App\Repositories;

use App\Models\Alumno;
use App\Repositories\BaseRepository;

/**
 * Class AlumnoRepository
 * @package App\Repositories
 * @version November 17, 2022, 7:39 pm UTC
*/

class AlumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'edad',
        'ci',
        'telefono',
        'direccion',
        'email',
        'profesion',
        'genero',
        'fecha_nac'
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
        return Alumno::class;
    }
}
