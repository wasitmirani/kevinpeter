<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function student(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function teacher(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function course(){

        return $this->belongsTo(Course::class,'course_id','id');
    }

}
