<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
    protected $fillable = ['student_id', 'lecture_id', 'grade'];

    public function students() {
        return $this->belongsTo(Student::class);
    }

    public function lectures() {
        return $this->belongsTo(Lecture::class);
    }
}
