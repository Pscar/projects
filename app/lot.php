<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
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
    protected $fillable = ['deteexp_at', 'drug_id', 'cost', 'stock_im'];
    
    public function product(){
        return $this->belongsTo('App\Product','drug_id'); 
    }
}
