<?php

namespace App\Http\Controllers;

use App\Job;
use App\JobRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    
    
    /**
    

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Job $job,$status)
    {
        $job->update(['status' => $status]);

        return redirect()->back();   
    }

    public function jobPurposal(JobRequest $job_purpose,$status)
    {
     
        if($status == 'accepted'){
            $job_purpose->job->update(['freelancer_id' => $job_purpose->profile_id]);       
            $job_purpose->job->update(['status' => $status]);       
            $job_purpose->update(['status' => $status]);
        }
                   
        if($status == 'interview'){

            $job_purpose->job->update(['freelancer_id' => $job_purpose->profile_id]);    
            $job_purpose->update(['status' => $status]);       
        }

        if($status == 'cancelled')
            $job_purpose->update(['status' => $status]);


        return redirect()->back();   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createJob(Request $request)
    {
        $request->merge(['profile_id' => Auth::user()->profile->id]);
        $request->merge(['status' => 'active']);
        $request->merge(['skill' => implode(" , ",$request->skill)]);

        $job = Job::create($request->except('_token'));

        return redirect()->route('single_job',['job' => $job]);
    }

    public function findJob($id = null)
    {
        $jobs = Job::orderBy('created_at','DESC');

        if(NULL != $id)
            $jobs = $jobs->where('profile_id',$id);

        $jobs = $jobs->get();


        return view('findwork',['jobs' => $jobs]);
    }

    public function singleJob(Job $job)
    {
        return view('singlebid',['job' => $job]);
    }

    public function jobRequest(Request $request)
    {
        $request->merge(['profile_id' => Auth::user()->profile->id]);
        $purposal = JobRequest::create($request->except('_token'));
        return redirect()->route('find_job');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function getPurposal(Job $job)
    {
        $purposals = JobRequest::where('job_id',$job->id)->get();
        return view('purposals',['purposals' => $purposals]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
