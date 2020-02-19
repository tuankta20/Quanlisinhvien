<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'sex', 'date'];


    public function class()
    {
        return $this->belongsTo('App\Classes');
    }
    public function score(){
        return $this->hasMany(Score::class);
    }
}
