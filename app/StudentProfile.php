<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    public function school_name()
    {
        return $this->belongsTo('App\SchoolName', 'school_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
