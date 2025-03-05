<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'short_description', 'long_description', 'price', 'selling_price', 'images', 'file', 'start_date', 'skill_level', 'category_id'
    ];
}
