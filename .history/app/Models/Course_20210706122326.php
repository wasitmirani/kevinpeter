<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function teachers(){
        return $this->belongsTo(User::class,'teacher_id','id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function enrollments(){
        return $this->hasMany(Enrollment::class);
    }
}
