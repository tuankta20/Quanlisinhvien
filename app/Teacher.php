<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function course(){
        return $this->belongsToMany('App\Course','teacher_course','teacher_id','course_id');
    }
}
