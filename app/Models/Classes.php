<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    protected $table = 'classes';

    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'NumOfChildren'=>30,
        'age_range'=>'3:5 years',
        'description',
        'teacher_id','price',
        'start_time','end_time',
        'start_date','end_date',
    ];
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function children()
    {
        return $this->belongsToMany(Child::class);
    }
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'class_id'); 
    }

}