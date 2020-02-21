<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

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
    protected $fillable = ['pro_name', 'detail', 'sale_price', 'drug_id', 'category_id'];

    
}
