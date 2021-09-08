<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    //
    protected $guarded = [];

    public function job(){

    	return $this->belongsTo('\App\Job','id','job_id');
    }

    public function profile(){

    	return $this->belongsTo('\App\Profile','id','profile_id');
    }
}
