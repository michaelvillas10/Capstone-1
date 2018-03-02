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
use App\lawyercasetype;
use App\Reason;
use PDF;
class RequestController extends Controller
{
    public function approve($id){
        $number = 0;
        $approved = Client::find($id);
        $approved->cl_status = 'Approved'; 
        $approved->save();
    $clientapproved = Client::where('cl_status','Approved')->orderBy('cllname','asc')
    ->with('casetobehandled')
    ->with('adverse')
    ->get();
    foreach($clientapproved as $clientapproveds){
        $con = date('Ym',strtotime($clientapproveds->created_at)) . substr($clientapproveds->nature_of_request, 0,2) . $number+=1;
        
        $caseapprove = casetobehandled::orderBy('created_at','desc')->first();
        $caseapprove -> control_number = date('Y-M',strtotime($clientapproveds->created_at)) . substr($clientapproveds->nature_of_request, 0,1) . $number+=1;
        $caseapprove ->case_status = 'Ongoing';
        $caseapprove->control_number = $con;
        $caseapproved = new approvedcase;
        $caseapproved->casetobehandled_id = $caseapprove->id;
                    }
        $caseapproved->control_number = $con;
                                  

  

    $casetype = casetobehandled::orderBy('created_at','desc')
    ->with('casetype')
    ->first();
    
 //    $newapproved = approvedcase::
 //    orderBy('created_at','desc')
 //    ->with('casetobehandled')
 //    ->first(); 

 // foreach ($newapproved as $key => $newapproveds) 
 // {

   

    $newcase = casetobehandled::orderBy('created_at','desc')
                ->with('approvedcase')
                ->first();  
            

$lawyers= Lawyer::inRandomOrder()
        // [$newcases->casetobehandled->nature_of_case,'<>',$casetype->casetobehandled->nature_of_case]
            ->with('employee')

                // ->min('casecount');
                ->get();

   
foreach ($lawyers as $lawyer) {
             
                
            $caseapproved->lawyer_id = $lawyer->id;
            $caseapproved->save();
                              }
                    
                                 
    //     $clientapproved = Client::where('cl_status','Approved')->orderBy('cllname','asc')
    // ->with('casetobehandled')
    // ->with('adverse')
    // ->get();
    //     $pdf = PDF::loadView('pdf.deny', array(
    //     'name' => $denied->clfname . ' ' . $denied->clmname . ' ' . $denied->cllname,
    //     'reason' => $denied->companyname,
        

    //     ));
    //     return $pdf->download($denied->firstname . '_' . $denied->lastname . '_denied.pdf');
    //     return view('deny')->withClients($denied);                
        
       
           return redirect('/client/show');
                                }
    public function reason()
    {
        
        return view('reason');
    }
   
    public function reasonpost(Request $request){

        $reason = new Reason;
        $reason->reason = $request->reason;
        $reason->save();
        return redirect('/');
    }
    public function deny($id){
        $denied = Client::find($id);
        $denied->cl_status = 'Denied';
        $papersize = array(0, 0, 360, 360);
        $pdf = PDF::loadView('pdf.badge', array(
        'name' => $denied->clfname . ' ' . $denied->clmname . ' ' . $denied->cllname
        
        ));
        $denied->save();
        
        
        

        
        return $pdf->download($denied->firstname . '_' . $denied->lastname . '_denied.pdf');
        return view('pdf.deny');

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

