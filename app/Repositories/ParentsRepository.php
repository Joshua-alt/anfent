<?php

namespace App\Repositories;

use App\Models\Parents;
use App\Repositories\BaseRepository;

/**
 * Class ParentsRepository
 * @package App\Repositories
 * @version November 13, 2020, 2:17 pm UTC
*/

class ParentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'NomPar',
        'PostnomPar',
        'PrenomPar',
        'AdressePar'
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
        return Parents::class;
    }
}
