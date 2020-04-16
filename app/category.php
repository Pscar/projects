<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categorys';

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
    protected $fillable = ['name_category','name_subprkun','name_howto','name_warning','name_storage'];

    
}
