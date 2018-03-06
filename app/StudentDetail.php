<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_details';

    /**
     * Get the student that owns the student_detail.
     */
    public function student(){
      return $this->belongsTo('App\Student');
    }

    public function centre()
    {
      return $this->belongsTo('App\Centre', 'added_by');
    }
}
