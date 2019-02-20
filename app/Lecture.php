<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Lecture extends Model
{
    //
    use Sortable;

    protected $fillable = ['name', 'description'];

    public $sortable = [
        'name'
    ];

    public function grades() {
        return $this->hasMany(Grade::class);
    }

}
