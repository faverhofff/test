<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Purchace
 * @package App\Models
 * @version March 14, 2020, 4:31 am UTC
 *
 * @property number id
 * @property string name
 */
class Purchace extends Model
{
    public $table = 'purchace';

    public $fillable = [
        'client_id',
        'product_stock_id',
        'count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'client_id' => 'integer',
        'product_stock_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'client_id' => 'required',
        'product_stock_id' => 'required',
        'count' => 'required'
    ];

    
}
