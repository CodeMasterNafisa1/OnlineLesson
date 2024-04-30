<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Science;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\TemplateProcessor;
use function PHPUnit\Framework\isNull;

class CertificateController extends Controller
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
        $user=auth()->user();
        $d=DB::select("select * from certificates where user_id='$user->id' && science_id='$request->science_id'");
        if(count($d)==0)
        {
            $topics=DB::select("select count(id) AS length from topics where `science_id`='$request->science_id'")[0];
            $checks=DB::select("SELECT count(checks.id) AS length from checks INNER JOIN topics ON topics.id=checks.topic_id WHERE checks.user_id={$user->id} && checks.status=1 && topics.science_id={$request->science_id}")[0];
            if($topics->length==$checks->length) {
                $sc=Science::find($request->science_id);
                $data = new Certificate();
                $data->user_id = $user->id;
                $data->science_id = $request->science_id;


                $templateProcess=new TemplateProcessor(public_path('certificate.docx'));
                $templateProcess->setValue([
                    'first_name'=>$user->first_name,
                    'last_name'=>$user->last_name
                ]);
                $fl=$user->id."-".time().'.docx';
                $pathname= public_path('Complete_Certificates/'.$fl);
                $templateProcess->saveAs($pathname);

                $data->file_name=$fl;
                $data->save();
            }
        }
        else {
            $pathname = public_path('Complete_Certificates/' . $d->file_name);
            $sc = Science::find($request->science_id);
        }
        $filename = "Certificate in " . $sc->name . " for " . $user->first_name . " " . $user->last_name;
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=' . $filename . '.docx');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessignml.document');
        readfile($pathname);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
