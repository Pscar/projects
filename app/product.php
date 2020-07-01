<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['pro_name', 'drug_id','contain', 'status_sale', 'saleprice', 'stock_ps', 'category_id'];

   
    public function lots(){
        return $this->hasMany('App\Lot','drug_id'); 
    }
    public function category(){
        return $this->belongsTo('App\Category','category_id'); 
    }
    public function sales(){
        return $this->hasMany('App\Sale','saleprice','saleprice');
    }
    public function scan(){
        return $this->belongsTo('App\Scan','drug_id'); 
    }
}
