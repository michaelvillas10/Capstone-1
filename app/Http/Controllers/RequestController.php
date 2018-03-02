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

class RequestController extends Controller
{
    public function approve($id){
      $approved = Client::find($id);
        $approved->cl_status = 'Approved';

      $case = 

            $caseapprove = casetobehandled::find($id);
            $caseapproved = new approvedcase;
            $caseapproved->casetobehandleds_id = $id;
           
            $caseapproved->save();

            
        
        $approved->save();
    }

    public function deny($id){

        $denied = Client::find($id);
        $denied->cl_status = 'Denied';
        $papersize = array(0, 0, 360, 360);
        $pdf = PDF::loadView('pdf.AFFIDAVIT', array(
        'name' => $denied->clfname . ' ' . $denied->clmname . ' ' . $denied->cllname
        
        ));
        $denied->save();
        
        
        

        
        return $pdf->download($denied->firstname . '_' . $denied->lastname . '_denied.pdf');
        return view('pdf.deny');

        $approved = Client::find($id);
        $approved->cl_status = 'Denied';
        $approved->save();
        return view('deny');


    }

    public function view($id){
        $all = Client::find($id)->with('casetobehandled')->with('adverse');
        // DB::table('clients')
        //     ->join('interviewees', 'clients.id', '=', 'interviewees.clients_id')
        //     ->join('casetobehandleds', 'clients.id', '=', 'casetobehandleds.clients_id')
        //     ->join('adverses','casetobehandleds.id','=','adverses.casetobehandleds_id')
        //     ->select('clients.*','casetobehandleds.*','adverses.*','interviewees.*' )
        //     ->where('cl_status','=','Pending')
        //     ->get();
        return view('viewer')->withClients($all);
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

