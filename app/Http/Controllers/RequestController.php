<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use DB;
use App\casetobehandled;
use App\Adverse;
use App\Interviewee;

class RequestController extends Controller
{
    public function approve($id){
      $approved = Client::find($id);
        $approved->cl_status = 'Approved';
        $approved->save();
    }

    public function deny($id){
        $approved = Client::find($id);
        $approved->cl_status = 'Denied';
        $approved->save();
        return view('deny');

    }

    public function view($id){
        $all = Client::find($id)->with('casetobehandled')->with('adverses')->with('interviewees');
        // DB::table('clients')
        //     ->join('interviewees', 'clients.id', '=', 'interviewees.clients_id')
        //     ->join('casetobehandleds', 'clients.id', '=', 'casetobehandleds.clients_id')
        //     ->join('adverses','casetobehandleds.id','=','adverses.casetobehandleds_id')
        //     ->select('clients.*','casetobehandleds.*','adverses.*','interviewees.*' )
        //     ->where('cl_status','=','Pending')
        //     ->get();
        return view('view clientalldata');
    }
    public function transfer($id){

        return view('casedistribution');
    }
    public function availablelawyer($id){

    }
    public function approvedtbl($id){

        return view('approvedtbl');
    }

}

