<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    //
    protected $fillable = ['name', 'description'];

    public function grades() {
        return $this->hasMany(Grade::class);
    }
}
