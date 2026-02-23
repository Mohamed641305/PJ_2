<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // الحقول اللي مسموح بالكتابة عليها
    protected $fillable = [
        'title',
        'price',
        'instructor_id',
        'status'
    ];
}
