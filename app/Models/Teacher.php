<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Classes;

class Teacher extends Model
{
    protected $table = 'teachers';

    use HasFactory, SoftDeletes;

    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'subject','image','published'];

    public function classes()
    {
        return $this->hasMany(Classes::class);
    }

}
