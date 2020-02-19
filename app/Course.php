<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];

    public function classes(){
        return $this->hasMany('App\Classes');
    }

    public function course(){
        return $this->belongsToMany('App\Teacher','teacher_course','course_id','teacher_id');
    }
}
