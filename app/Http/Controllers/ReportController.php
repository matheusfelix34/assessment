<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Profile;
use App\Models\ReportProfile;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
        $this->report = new Report();
        $this->profile = new Profile();
        $this->reportprofile = new ReportProfile();
     }


    public function index()
    {
        $reports=$this->report->all();
       
        return view('report/index',compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profiles = $this->profile->all();
        
        return view('report.create',compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg_report=$this->report->create([
            'title'=>$request->title,
            'description'=>$request->description,
         ]);

         if($reg_report){

            $profiles_array=$request->profiles;

           

            for ($i=0; $i <count($profiles_array) ; $i++) { 
                $reg_reportprofile= new ReportProfile();
                $reg_reportprofile->report_id=$reg_report->id;
                $reg_reportprofile->profile_id=$profiles_array[$i];
                $reg_reportprofile->save();
            }
           
            
            if($reg_reportprofile){

                return 1;
            }else{
                $this->report->destroy($id);
               
                return 3;
            }
           
            return 1;
        }else{
            return 2;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
