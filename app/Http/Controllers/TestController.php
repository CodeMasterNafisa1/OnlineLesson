<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        if(auth()->user()->role!="owner"){
            return redirect()->back();
        }
        $request->validate([
            'question_name'=>'required',
            'variant'=>'required|array',
            'true'=>'required|integer',
        ]);
        $data=new Tests();
        $data->topic_id=$request->topic_id;
        $data->question=$request->question_name;
        $data->variant=json_encode($request->variant);
        $data->true=$request->true;
        $data->save();
        return redirect()->back();
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
        if(auth()->user()->role!="owner"){
            return redirect()->back();
        }
        $request->validate([
            'question_name'=>'required',
            'variant'=>'required',
            'true'=>'required',
        ]);
        $data=Tests::find($id);
        $data->question=$request->question_name;
        $data->variant=json_encode($request->variant[$id]);
        $data->true=$request->true[$id];
        $data->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        if(auth()->user()->role!="owner"){
            return redirect()->back();
        }
    }
}
