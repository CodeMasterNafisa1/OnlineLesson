<?php

namespace App\Http\Controllers;

use App\Models\Science;
use App\Models\Topics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function sciences()
    {
        if(auth()->user()->role!="owner"){
            $data=Science::all();
            return view("AdminPanel.user_sciences",['data'=>$data]);
        }
        $data=Science::all();
        return view("AdminPanel.sciences",['data'=>$data]);
    }

    function topics()
    {
        if(auth()->user()->role!="owner"){
            return redirect()->back();
        }
        if(isset($_GET['id'])) {
            $id=$_GET['id'];
            $science=Science::find($id);
            $data=DB::select("select * from topics where science_id=$id");
            return view("AdminPanel.topics",['science'=>$science,'data'=>$data]);
        }
        return redirect()->back();
    }
    function tests()
    {
        if(auth()->user()->role!="owner"){
            return redirect()->back();
        }
        if(isset($_GET['id'])) {
            $id=$_GET['id'];
            $topic=Topics::find($id);
            $science=Science::find($topic->science_id);
            $data=DB::select("select * from tests where topic_id=$id");
            return view("AdminPanel.tests",['science'=>$science,'topic'=>$topic,'data'=>$data]);
        }
        return redirect()->back();
    }

    public function showsc(Request $request)
    {
        if(auth()->user()->role!="owner"){
            return redirect()->back();
        }
        $data=Science::find($request->id);
        return response()->json([
            "data" => $data,
        ]);
    }
    public function showtp(Request $request)
    {
        if(auth()->user()->role!="owner"){
            return redirect()->back();
        }
        $data=Topics::find($request->id);
        return response()->json([
            "data" => $data,
        ]);
    }
}
