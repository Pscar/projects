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
    protected $fillable = ['name','lastname', 'address', 'tel','role','user_id'];

    public function user(){
        return $this->hasOne('App\information','user_id'); 
    }

    
}
