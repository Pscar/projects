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
    protected $fillable = ['drug_id', 'cost', 'deteexp_at', 'stock_im'];

    public function product(){
        return $this->belongTo('App\Product','drug_id'); 
    }
}
