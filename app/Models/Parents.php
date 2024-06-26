<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Child;

class parents extends Model
{
    protected $table = 'parents';

    use HasFactory, SoftDeletes;
    protected $fillable = ['first_name', 'last_name', 'phone', 'address', 'email','job'];

    public function children()
    {
        return $this->hasMany(Child::class);
    }

}
