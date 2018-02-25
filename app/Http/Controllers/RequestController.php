<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use DB;
use App\casetobehandled;
use App\Adverse;
use App\Interviewee;
use App\approvedcase;
use App\Lawyer;
use App\Employee;

class RequestController extends Controller
{
    public function approve($id){
      $approved = Client::find($id);
        $approved->cl_status = 'Approved'; 
        $approved->save();
      $cases= DB::table('approvedcases')
                ->join('casetobehandleds','casetobehandleds.id','=','approvedcases.casetobehandled_id')
                ->join('lawyers','lawyers.id','=','approvedcases.lawyer_id')
                ->select('approvedcases.*','casetobehandleds.*','lawyers.*')
                ->get();            
return $cases;
            $caseapprove = casetobehandled::find($id);
            $caseapproved = new approvedcase;
            $caseapproved->casetobehandled_id = $id;
                $casetbh = casetobehandled::all();
                $employee = Employee::all();
                $laws = Lawyer::all();
foreach($casetbh as $caset){
foreach($employee as $employees) {
foreach($laws as $law){
                $lawyers= DB::table('lawyers')
                ->join('approvedcases','approvedcases.lawyer_id','=','lawyers.id')
                ->join('employees','employees.id','=','lawyers.employees_id')
                ->select('approvedcases.*','employees.*','lawyers.*')
                ->where('casecount')
                ->get();
return $lawyers;
foreach ($lawyers as $lawyer) {
                $case = approvedcase::where('casetobehandled_id',$caset->id)->get();
        
                
            $caseapproved->lawyer_id = $lawyer->id;
            $caseapproved->save();
                              }
                      }
                                 }
                           }
        
       
           return redirect('/client/show');
                                }

    public function deny($id){
        $denied = Client::find($id);
        $denied->cl_status = 'Denied';
        $denied->save();
        return view('deny');

    }

    public function view($id){
        $alls = Client::find($id)->with('casetobehandled')->with('adverse')->get();
        
        // DB::table('clients')
        //     ->join('interviewees', 'clients.id', '=', 'interviewees.clients_id')
        //     ->join('casetobehandleds', 'clients.id', '=', 'casetobehandleds.clients_id')
        //     ->join('adverses','casetobehandleds.id','=','adverses.casetobehandleds_id')
        //     ->select('clients.*','casetobehandleds.*','adverses.*','interviewees.*' )
        //     ->where('cl_status','=','Pending')
        //     ->get();
        return view('viewer')->withAlls($alls);
    }
    public function transfer($id){

        return view('casedistribution');
    }
    public function availablelawyer($id){

    }
    public function approvedtbl(){
        $clients = Client::where('cl_status','Approved')
        ->orderBy('cllname','asc')
        ->with('casetobehandled')
        ->with('adverse')
        ->get();
        
       
        return view('approvedtbl')->withClients($clients);
    }

}

