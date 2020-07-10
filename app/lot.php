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
    protected $fillable = ['deteexp_at', 'drug_id', 'cost', 'stock_im','product_id','user_id'];
    
    public function product(){
        return $this->belongsTo('App\Product','product_id'); 
    }
    public function user(){
        return $this->belongsTo('App\User','user_id'); 
    }
}
