<?php

namespace App\Repositories;

use App\Models\enfant;
use App\Repositories\BaseRepository;

/**
 * Class enfantRepository
 * @package App\Repositories
 * @version November 14, 2020, 12:08 pm UTC
*/

class enfantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'NomEnf',
        'PostnomEnf',
        'PrenomEnf',
        'SexeEnf',
        'LieuNais',
        'Motifie',
        'DateNais',
        'nomparent',
        'idparent'
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
        return enfant::class;
    }
}
