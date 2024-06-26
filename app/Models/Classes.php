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
        'NumOfChildren',
        'age_range',
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