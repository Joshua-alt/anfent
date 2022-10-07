<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class enfant
 * @package App\Models
 * @version November 14, 2020, 12:08 pm UTC
 *
 * @property \App\Models\Parent $idparent
 * @property string $NomEnf
 * @property string $PostnomEnf
 * @property string $PrenomEnf
 * @property string $SexeEnf
 * @property string $LieuNais
 * @property string $Motifie
 * @property string|\Carbon\Carbon $DateNais
 * @property string $nomparent
 * @property integer $idparent
 */
class enfant extends Model
{
    use SoftDeletes;

    public $table = 'enfant';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'NomEnf' => 'string',
        'PostnomEnf' => 'string',
        'PrenomEnf' => 'string',
        'SexeEnf' => 'string',
        'LieuNais' => 'string',
        'Motifie' => 'string',
        'DateNais' => 'datetime',
        'nomparent' => 'string',
        'idparent' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NomEnf' => 'required|string|max:20',
        'PostnomEnf' => 'required|string|max:15',
        'PrenomEnf' => 'required|string|max:15',
        'SexeEnf' => 'required|string|max:1',
        'LieuNais' => 'required|string|max:50',
        'Motifie' => 'required|string|max:151',
        'DateNais' => 'nullable',
        'nomparent' => 'nullable|string|max:50',
        'idparent' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idparent()
    {
        return $this->belongsTo(\App\Models\Parent::class, 'idparent');
    }
}
