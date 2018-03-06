<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    public function studentdetail()
    {
        return $this->hasMany('App\StudentDetail', 'added_by');
    }
}
