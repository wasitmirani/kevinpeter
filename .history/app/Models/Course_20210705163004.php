<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
}
