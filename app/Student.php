<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Student extends Model
{
    //
    use Sortable;

    protected $fillable = ['name', 'surname', 'email', 'phone'];

    public $sortable = [
        'name',
        'surname'
    ];

    public function grades() {
        return $this->hasMany(Grade::class);
    }


}
