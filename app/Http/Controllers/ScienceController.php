<?php

namespace App\Http\Controllers;

use App\Models\Science;
use App\Models\Topics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScienceController extends Controller
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
            'science'=>'required', 'string', 'max:255'
        ]);
        $data=new Science();
        $data->name=$request->science;
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $db=DB::select("select * from sciences where name='$name'");
        if(count($db)==0)
            return redirect()->back();
        $sc=$db[0];
        $topics=DB::select("select * from topics where science_id='$sc->id'");
        if(isset($_GET['name']))
        {
            $name=($_GET['name']);
            $topic=DB::select("select * from topics where name='$name'");
            if(count($topic)!=0) {
                $topic=$topic[0];
                $data=DB::select("select * from tests where topic_id=$topic->id");
                $sct=DB::select("select *from certificates where user_id=".auth()->id());
                if(count($sct)==0)
                {
                    $sct=false;
                }
                else
                {
                    $sct=true;
                }
                return view("Public.topic", ['science' => $sc, 'data' => $topics,'tests'=>$data, 'topic' => $topic,'sc'=>$sct]);
            }
        }
        return view("Public.index",['science'=>$sc,'data'=>$topics]);
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
        $data=Science::find($id);
        $data->name=$request->science;
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
        Science::destroy($id);
        $sdata=DB::select("select * from topics where science_id=$id");
        foreach ($sdata as $data) {
            $id=$data->id;
            if ($data->type == "file") {
                unlink("Video/" . $data->video);
            }
            Topics::destroy($id);
            DB::select("DELETE from tests where topic_id=$id");
        }
        return redirect()->back();
    }
}
