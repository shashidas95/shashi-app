<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function page(Request $request)
    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'projects')->first();
        return view('pages.projects', ['seo'=>$seo]);
    }

    public function projectData(Request $request)
    {
        sleep(5);
        return DB::table('projects')->get();
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
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
