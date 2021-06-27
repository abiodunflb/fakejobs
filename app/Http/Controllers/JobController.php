<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('home', 'create', 'store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::latest()->paginate(10);
        return view('Job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:jobs',
            'address' => 'required'
        ]);

        $job = new Job();
        $job->name = $request->name;
        $job->address = $request->address;
        $job->save();

        $notification = array(
            'message' => 'Fake job added',
            'alert-type' => 'success'
        );
        return redirect()->route('home')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
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
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }

    public function home()
    {
        // $jobs = Job::where('status', 'approved')->paginate(10);
        $jobs = Job::latest()->paginate(5);
        return view('home', compact('jobs'));
    }

    public function status(Job $job)
    {

        dd('hello');
        if ($job->status == 'disapproved') {
            $job->Update([
                'status' => 'approved'
            ]);
        } else {
            $job->Update([
                'status' => 'disapproved'
            ]);
        }

        return back();
    }
}
