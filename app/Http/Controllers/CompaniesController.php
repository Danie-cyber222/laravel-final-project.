<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employer;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Employer::latest()->get();
        return view("Companies.index", ['companies' => $companies]);
    }
}
