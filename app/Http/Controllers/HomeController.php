<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function page(Request $request)

    {
        $seo = DB::table('seoproperties')->where('pageName', '=', 'home')->first();
        return view('pages.home', ['seo'=>$seo]);
    }
    public function heroData(Request $request)
    {
        return DB::table('heroproperties')->first();
    }

    public function aboutData(Request $request)
    {
        return DB::table('abouts')->first();
    }
    public function socialData(Request $request)
    {
        return DB::table('socials')->first();
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
