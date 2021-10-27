<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Investment
 * @package App\Models
 * @version October 27, 2021, 6:52 am UTC
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $accountName
 * @property number $init_invest
 * @property string $start_date
 * @property string $remarks
 */
class Investment extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'investment';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'lastName',
        'firstName',
        'accountName',
        'init_invest',
        'start_date',
        'remarks'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lastName' => 'string',
        'firstName' => 'string',
        'accountName' => 'string',
        'init_invest' => 'decimal:2',
        'start_date' => 'date',
        'remarks' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lastName' => 'required|string|max:255',
        'firstName' => 'required|string|max:255',
        'accountName' => 'required|string|max:255',
        'init_invest' => 'required|numeric',
        'start_date' => 'required',
        'remarks' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
