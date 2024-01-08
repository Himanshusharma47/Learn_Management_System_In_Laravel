<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'course_id',
        'subject_name',
        'subject_code',
        'description',
    ];

    protected $table = 'subjects';
    // public $timestamps = false;

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
