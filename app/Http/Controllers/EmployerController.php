<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function show(){
        // Get the jobs belonging to the authenticated user's employer.
        // We eager load the 'tags' relationship to prevent N+1 query issues in the view.
        $jobs = Auth::user()->employer
            ->jobs()
            ->with('tags')
            ->latest()
            ->get();

        return view('jobs.show', ['jobs' => $jobs]);
    }
}
