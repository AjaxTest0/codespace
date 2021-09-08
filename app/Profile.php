<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = [];

    public function jobs(){

    	return $this->hasMany('\App\Job', 'id', 'job_id');
    }
}
