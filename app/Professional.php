<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    /**
    * Get the student_detail record associated with the student.
    */
    public function professionaldetail()
    {
        return $this->hasOne('App\ProfessionalDetail');
    }

    public $timestamps = false;
}
