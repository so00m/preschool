<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Parents;
use App\Models\ChildCourse;
use App\Models\Course;

class Child extends Model

{
    use HasFactory, SoftDeletes;

    protected $table = 'children';
    protected $fillable = ['first_name', 'last_name', 'birth_date', 'grade', 'parent_id'];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function childCourses()
    {
        return $this->hasMany(ChildCourse::class);
    }

    public function parent()
    {
        return $this->belongsTo(Parents::class, 'parent_id');
    }
}
