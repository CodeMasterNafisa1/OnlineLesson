<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicsController extends Controller
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
            'name'=>'required|string',
            'science_id'=>'required|integer',
            'video'=>'required',
            'file_url'=>'required'
        ]);
        if($request->file_url=="file") {
            $filename = "vid" . time() . "." . $request->video->getClientOriginalExtension();
            request()->video->move(public_path("Video"), $filename);
        }
        else{
            $filename = $request->video;
        }
        $data=new Topics();
        $data->name=$request->name;
        $data->science_id=$request->science_id;
        $data->type=$request->file_url;
        $data->video=$filename;
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
            'name'=>'required|string',
        ]);
        $data=Topics::find($id);
        $data->name=$request->name;
        if(isset($request->video))
        {
            if($request->file_url=="file") {
                if($data->type=="file") {
                    $old = $data->video;
                }
                $filename = "vid" . time() . "." . $request->video->getClientOriginalExtension();
                request()->video->move(public_path("Video"), $filename);
            }
            else{
                if($data->type=="file") {
                    $old = $data->video;
                }
                $filename = $request->video;
            }
            $data->type=$request->file_url;
            $data->video = $filename;
            $data->save();
        }
        $data->save();
        if(isset($old) )
        {
            unlink("Video/".$old);
        }
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
        $data=Topics::find($id);
        if($data->type=="file") {
            unlink("Video/" . $data->video);
        }
        Topics::destroy($id);
        DB::select("DELETE from tests where topic_id=$id");
        return redirect()->back();
    }
}
