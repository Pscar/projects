<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bills';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['amount', 'sale', 'sale_items', 'receipt_id', 'sale_id'];

    
}
