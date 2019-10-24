<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DogType extends Model
{
    protected $fillable = ['type'];
   

    public function dogs()
    {
        return $this->hasMany('App\Dog','type');
    }
}
