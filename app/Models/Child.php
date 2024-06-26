<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Classes;
use App\Models\Parents;
use App\Models\Enrollment;

class Child extends Model
{
    protected $table = 'children';

    use HasFactory, SoftDeletes;
    protected $fillable = ['first_name', 'last_name','birth_date', 'grade' ,'parent_id'];

    public function classes()
    {
        return $this->belongsToMany(classes::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class); 
    }

}
