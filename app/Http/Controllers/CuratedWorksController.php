<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuratedWorksController extends Controller
{
    public function show($slug)
    {
        $works = config('curated_works');

        if (!isset($works[$slug])) {
            abort(404); // if slug not found
        }

        $work = $works[$slug];
        return view('curatedWorks.details', compact('work'));
    }
}
