<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['pro_name', 'drug_id','contain', 'status_sale', 'saleprice', 'stock_ps', 'category_id','user_id'];

    public function sales(){
        return $this->hasMany('App\Sale','product_id');
    }
    public function lots(){
        return $this->hasMany('App\Lot','product_id'); 
    }
    public function category(){
        return $this->belongsTo('App\Category','category_id'); 
    }
    public function user(){
        return $this->belongsTo('App\User','user_id'); 
    }
    
}
