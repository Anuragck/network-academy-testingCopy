<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table="courses";

    public function courseBatches(){
    return $this->hasMany(CourseBatch::class);
    }


    public function category(){
    return $this->belongsTo(CourseCategory::class);
    }


 
      
        

}
