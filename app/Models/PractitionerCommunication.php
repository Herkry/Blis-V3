<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class PractitionerCommunication extends Model
{
    public function Patient($value='')
    {
    	return $this->belongsTo('App\Models\Patient');
    }

    public function Practitioner()
    {
    	return $this->belongsTo('App\Models\Practitioner');
    }

}
