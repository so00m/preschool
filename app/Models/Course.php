<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Child;
use App\Models\Teacher;
use App\Models\ChildCourse;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'courses';

    protected $fillable = [
        'name',
        'NumOfChildren',
        'age_range',
        'description',
        'teacher_id',
        'price',
        'start_time',
        'end_time',
        'start_date',
        'end_date',
    ];
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function children()
    {
        return $this->belongsToMany(Child::class, 'child_courses', 'course_id', 'child_id');
    }
    
    public function childCourses()
    {
        return $this->hasMany(ChildCourse::class, 'course_id');
    }
}