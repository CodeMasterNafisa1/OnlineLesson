<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
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
        $request->validate([
            'id'=>'required|integer',
            'true'=>'required'
        ]);
        $t=0;
        $f=0;
        foreach ($request->true as $k=>$val) {
            $true=DB::select("select * from tests where id=$k")[0]->true;
            if($val==$true)
            {
                $t++;
            }
            else
            {
                $f++;
            }
        }
        $topic_id=$request->id;
        $user_id=auth()->id();
        $score=($t*100)/($t+$f);
        $db=DB::select("select * from checks where user_id=$user_id && topic_id={$topic_id}");
        if(count($db)!=0)
        {
            $data=Check::find($db[0]->id);
        }
        else {
            $data = new Check();
        }
        $data->user_id=$user_id;
        $data->topic_id=$topic_id;
        $data->score=$score;
        if($score>=90)
        {
            $data->status=1;
        }
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
