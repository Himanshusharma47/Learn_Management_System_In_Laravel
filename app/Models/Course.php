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
        'course_name',
        'course_code',
        'teacher_id',
        'students',
        'duration',

    ];

    protected $table = 'courses';
    // public $timestamps = false;

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }


}
