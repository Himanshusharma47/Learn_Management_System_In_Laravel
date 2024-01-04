<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'teacher_name',
        'course',
        'subject_name',
        'topic',
        'description',
        'file_path',
        'timeline',
    ];

    protected $table = 'courses';
    public $timestamps = false;
}
