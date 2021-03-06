<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bills';

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
    protected $fillable = ['user_id', 'total'];

    public function sales(){
        return $this->hasMany('App\Sale','bill_id');
    }
    public function lots(){
        return $this->belongsTo('App\Lot','user_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
  
}
