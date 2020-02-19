<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   protected $fillable=['name'];

    public function score(){
        return $this->hasMany(Score::class);
    }
}
