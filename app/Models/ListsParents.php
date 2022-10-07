<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ListsParents
 * @package App\Models
 * @version November 13, 2020, 2:26 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $enfants
 * @property string $NomPar
 * @property string $PostnomPar
 * @property string $PrenomPar
 * @property string $AdressePar
 */
class ListsParents extends Model
{
    use SoftDeletes;

    public $table = 'parent';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'NomPar',
        'PostnomPar',
        'PrenomPar',
        'AdressePar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'NomPar' => 'string',
        'PostnomPar' => 'string',
        'PrenomPar' => 'string',
        'AdressePar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NomPar' => 'required|string|max:30',
        'PostnomPar' => 'required|string|max:20',
        'PrenomPar' => 'required|string|max:15',
        'AdressePar' => 'required|string|max:151',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function enfants()
    {
        return $this->hasMany(\App\Models\Enfant::class, 'idparent');
    }
}
