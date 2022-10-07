<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class reunificcation
 * @package App\Models
 * @version November 14, 2020, 12:10 pm UTC
 *
 * @property string $NomEnf
 * @property string $PostnomEnf
 * @property string $PrenomEnf
 * @property string $SexeEnf
 * @property string $LieuNais
 * @property string $temoin
 * @property string $Autorite
 * @property string $Motifie
 * @property string|\Carbon\Carbon $DateNais
 * @property string $nomparent
 * @property integer $idparent
 */
class reunificcation extends Model
{
    use SoftDeletes;

    public $table = 'reunificcation';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'temoin' => 'string',
        'Autorite' => 'string',
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
        'temoin' => 'nullable|string|max:30',
        'Autorite' => 'nullable|string|max:30',
        'Motifie' => 'required|string|max:151',
        'DateNais' => 'nullable',
        'nomparent' => 'nullable|string|max:50',
        'idparent' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
