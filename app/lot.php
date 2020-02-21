<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lot extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lots';

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
    protected $fillable = ['dete_exp', 'dete_enday', 'drug_id', 'cost', 'lot_id'];

    
}
