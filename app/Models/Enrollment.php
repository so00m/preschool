<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Child;
use App\Models\Classes;

class Enrollment extends Model
{
    protected $table = 'enrollments';

    protected $fillable = ['registerDate','status','child_id','class_id'];

    public function child()
    {
        return $this->belongsTo(Child::class); 
    }

    public function class()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }
}