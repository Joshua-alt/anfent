<?php

namespace App\Repositories;

use App\Models\reunificcation;
use App\Repositories\BaseRepository;

/**
 * Class reunificcationRepository
 * @package App\Repositories
 * @version November 14, 2020, 12:10 pm UTC
*/

class reunificcationRepository extends BaseRepository
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
        'temoin',
        'Autorite',
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
        return reunificcation::class;
    }
}
