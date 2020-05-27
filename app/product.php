<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
    protected $fillable = ['pro_name', 'drug_id','contain', 'status_sale', 'saleprice', 'stock_ps', 'category_id'];

    public function lots(){
        return $this->hasMany('App\Lot','drug_id'); 
    }
    public function category(){
        return $this->belongsTo('App\Category','category_id'); 
    }
}
