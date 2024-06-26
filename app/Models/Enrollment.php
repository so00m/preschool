<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';

    protected $fillable = ['registerDate','status',];

    public function child()
    {
        return $this->belongsTo(Child::class); 
    }

    public function class()
    {
        return $this->belongsTo(Classes::class,'class_id');
    }
}