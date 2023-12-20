<?php

namespace App\Http\Controllers;

use App\Models\Footballer;
use Illuminate\Http\Request;

class FootballerApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Footballer::all();
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
    public function show(Footballer $footballer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footballer $footballer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footballer $footballer)
    {
        //
    }
}
