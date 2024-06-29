<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Child;
use App\Models\Course;

class ChildCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = '_child_courses'; 

    protected $fillable = ['registerDate', 'status', 'child_id', 'course_id']; 

    public function child()
    {
        return $this->belongsTo(Child::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id'); 
    }
}

