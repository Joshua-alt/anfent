<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class agent
 * @package App\Models
 * @version November 13, 2020, 1:39 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $fonction
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $two_factor_secret
 * @property string $two_factor_recovery_codes
 * @property string $remember_token
 * @property integer $current_team_id
 * @property string $profile_photo_path
 */
class agent extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'fonction' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'two_factor_secret' => 'string',
        'two_factor_recovery_codes' => 'string',
        'remember_token' => 'string',
        'current_team_id' => 'integer',
        'profile_photo_path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'fonction' => 'nullable|string|max:255',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'two_factor_secret' => 'nullable|string',
        'two_factor_recovery_codes' => 'nullable|string',
        'remember_token' => 'nullable|string|max:100',
        'current_team_id' => 'nullable',
        'profile_photo_path' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
