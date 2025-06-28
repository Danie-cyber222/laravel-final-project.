<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag){
        $jobs = $tag->jobs()->with(['employer', 'tags'])->get();
        return view('results', ['jobs' => $jobs]);
    }
}
