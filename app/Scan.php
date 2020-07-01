<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
    protected $table = 'scans';
    protected $primaryKey = 'scan_id';
    protected $fillable = ['drug_id', 'sale_id'];
    
    public function products(){
        return $this->hasMany('App\Product','drug_id'); 
    }
    public function sale(){
        return $this->belongsTo('App\Sale','sale_id'); 
    }
}
