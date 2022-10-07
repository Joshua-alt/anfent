<?php

namespace App\Repositories;

use App\Models\ListsParents;
use App\Repositories\BaseRepository;

/**
 * Class ListsParentsRepository
 * @package App\Repositories
 * @version November 13, 2020, 2:26 pm UTC
*/

class ListsParentsRepository extends BaseRepository
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
        return ListsParents::class;
    }
}
