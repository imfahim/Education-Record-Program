<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'professional_details';

    protected $primaryKey = 'det_id';

    /**
     * Get the student that owns the professional_detail.
     */
    public function professional(){
      return $this->belongsTo('App\Professional');
    }
}
