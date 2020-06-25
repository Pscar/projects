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
    protected $fillable = ['saleprice', 'name', 'category_id', 'user_id', 'amount', 'total_beforesale','vat','vatpercent','vat_totalafter','total','bill_id'];

    public function product(){
        return $this->belongsTo('App\Product','saleprice','saleprice'); 
    }
    public function sale(){
        return $this->belongsTo('App\Sale','bill_id');
    }
}
