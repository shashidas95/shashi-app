<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.resume');
    }


    public function resumeLink(Request $request)
    {
        return DB::table('resumes')->first();
    }
    public function experiencesData(Request $request)
    {
        return DB::table('experiences')->get();
    }
    public function educationData(Request $request)
    {
        return DB::table('educations')->get();
    }
    public function skillsData(Request $request)
    {
        return DB::table('skills')->get();
    }
    public function languageData(Request $request)
    {
        return DB::table('languages')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
