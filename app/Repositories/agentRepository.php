<?php

namespace App\Repositories;

use App\Models\agent;
use App\Repositories\BaseRepository;

/**
 * Class agentRepository
 * @package App\Repositories
 * @version November 13, 2020, 1:39 pm UTC
*/

class agentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'fonction',
        'email_verified_at',
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'remember_token',
        'current_team_id',
        'profile_photo_path'
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
        return agent::class;
    }
}
