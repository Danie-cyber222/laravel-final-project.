<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalariesController extends Controller
{
    public function index()
    {
        return view("Salaries.index");
    }
}
