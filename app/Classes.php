<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    protected $fillable = ['name'];

    public function student(){
        return $this->hasMany('App\Student');
    }
    public function course(){
        return $this->belongsTo('App\Course');
    }
    }
