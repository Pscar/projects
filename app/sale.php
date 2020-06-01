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
    protected $fillable = ['category_id', 'drug_id', 'amount', 'total_sale', 'saleprice_sale'];

    public function product(){
        return $this->belongsTo('App\Sale','drug_id');
    }
    public function bills(){
        return $this->hasMany('App\Bill','sale_id');
    }
}
