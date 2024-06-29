<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Course;

class Teacher extends Model
{
    protected $table = 'teachers';

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'image',
        'published'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}
