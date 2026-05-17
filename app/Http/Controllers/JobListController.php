<?php

namespace App\Http\Controllers;


use App\Models\JobList;
use Illuminate\Http\Request;

class JobListController extends Controller
{
    public function index()
    {
        // Fetch all jobs from the database
        $jobs = JobList::all();
        // Return the view with the jobs data
        return view('jobs.index', compact('jobs'));
    }
     public function show(JobList $job)
    {
        return view('jobs.show', compact('job'));
    }
}