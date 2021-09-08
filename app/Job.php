<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $guarded =[];

    public function profile(){

    	return $this->belongsTo('\App\Job','id','job_id');
    }

    public function jobPurposals(){

    	return $this->hasMany(JobRequest::class,'job_id','id');
    }

}
