<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Features
 * @package App\Models
 * @version March 14, 2020, 4:31 am UTC
 *
 * @property number id
 * @property string name
 */
class Features extends Model
{
    public $table = 'features';

    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|min:5|max:100'
    ];

    
}
