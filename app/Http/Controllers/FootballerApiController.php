<?php

namespace App\Http\Controllers;

use App\Models\Footballer;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);
 
        if ($validator->fails()) {
            return response($validator->errors());
        } else {
            
            $footballer = Footballer::create($request->all());

            return response("$footballer",200);
        
        }
       

        // $validated = $request->validate([
        //     'title' => 'required|max:255',
        // ]);

        // if(empty($validated)) {
        //     $footballer = new Footballer;
        //     $footballer->name = $request->name;   
        //     $footballer->save();
            
        //     return response()->json($footballer,200);
        // } else {
        //     $data = [
        //         "status"=>422
        //     ];
        //     return response()->json($data,422);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Footballer $footballer)
    {
        return response("$footballer",200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footballer $footballer)
    {
        $validator = Validator::make($request->all(), [
            "name"=> "required"
            ]);

        if ($validator->fails()) {
            return response($validator->errors());
        } else {
            $footballer->update($request->all());
            return response("$footballer",200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footballer $footballer)
    {
        $footballer->delete();
        return response("Done!",200);
    }
}
