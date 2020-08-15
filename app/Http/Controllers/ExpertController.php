<?php

namespace App\Http\Controllers;

use App\Expert;
use App\Expertise;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function show(Expert $expert)
    {
        return view('experts.show', compact('expert'));
    }

    public function search(Request  $request)
    {
        $search_query = 'expertise_id:(' . $request->param . ')';
        $experts = Expert::search($search_query)->get();

        $selectedExpertise = Expertise::find($request->param)->name;

        return view('welcome', compact('experts', 'selectedExpertise'));
    }
}
