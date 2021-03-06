<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sales';

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
    protected $fillable = ['saleprice', 'pro_name', 'category_id', 'user_id', 'amount','vat','vatpercent','total','bill_id','product_id','percost','profit','drug_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function product(){
        return $this->belongsTo('App\Product','product_id'); 
    }
    public function bill(){
        return $this->belongsTo('App\Bill','bill_id');
    }
   
}
