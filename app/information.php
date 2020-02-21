<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'informations';

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
    protected $fillable = ['name', 'lastname', 'address', 'tel', 'staff_id' , 'role', 'user_id'];

    public function User(){
        return $this->hasOne('App\information', 'staff_id'); 
    }

    
}
