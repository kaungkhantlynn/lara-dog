<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $fillable = ['name','type','age','color'];
    protected $with = ['dogtype'];
    public function scopefindAge($query,$age){
       return $query->where('age',$age)->first();
    }

    public function dogtype()
    {
        return $this->belongsTo('App\DogType','type');
    }
}
