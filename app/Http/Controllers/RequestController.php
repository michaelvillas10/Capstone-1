<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use DB;
use App\casetobehandled;
use App\Adverse;
use App\Interviewee;
use App\Employee;
use App\employeeclients;
use PDF;
use Carbon\Carbon;

class RequestController extends Controller
{
    public function approve($id)
    {

      $approved = Client::find($id);
        $con = "";
        $date = date('F j Y ');
        $approved->cl_status = 'Approved';
        $approved->save();
        
     $cases = casetobehandled::where('client_id',$approved->id)->get();
      foreach ($cases as $key => $case) {
        $number = $case->increment('count');
         $con = date('Ym',strtotime($case->created_at)) . substr($case->nature_of_case, 0,2). sprintf('00').$number+=1;
                                        
     $case ->control_number = $con;
     $case ->save();
                                        }
      $interviewsheet = Client::where('id',$approved->id)
                        ->with('casetobehandled')
                        ->with('adverse')
                        ->get();
      $employeeclient = employeeclients::where('client_id',$approved->id)->get();
      foreach ($employeeclient as $key => $employeeclients) {
        $lawyers = Employee::where('id',$employeeclients->employee_id)->get();
                                                           
   foreach($lawyers as $lawyer)
    {

   

     foreach ($interviewsheet as $key => $interviewsheets) 
     {
        foreach($interviewsheets->casetobehandled as $case){
        $casename = $case->casename;
        $casetype = $case->nature_of_case;
        $interviewer = $case->interviewer;
        $involvement = $case->clcase_involvement;
        $category = $case->clcomplainant_victim_of;
        $controlno = $case->control_number;
                                                           }
        $advtype = $interviewsheets->adverse->advprtytype;
        $advname = $interviewsheets->adverse->advprtyfname . ' ' . $interviewsheets->adverse->advprtymname . ' ' .
        $interviewsheets->adverse->advprtylname;
        $advaddr = $interviewsheets->adverse->advprtyaddress;

     
       $papersize = array(0, 0, 360, 360);
       $pdf = PDF::loadView('forms.interviewsheet', array(
        'name' => $interviewsheets->clfname . ' ' . $interviewsheets->clmname . ' ' . $interviewsheets->cllname,
        'address' => $interviewsheets->claddress,
        'religion' => $interviewsheets->clreligion,
        'citizenship' => $interviewsheets->clcitizenship,
        'email' => $interviewsheets->clemail ,
        'income' => $interviewsheets->clmonthly_net_income,
        'gender' => $interviewsheets->clgender,
        'cstat' => $interviewsheets->clcivil_status,
        'educ' => $interviewsheets->cleducational_attainment,
        'language' => $interviewsheets->cllanguage,
        'contact' => $interviewsheets->clcontact_no,
        'request' => $interviewsheets->nature_of_request,
        'detain' => $interviewsheets->cldetained,
        'detention' => $interviewsheets->clplace_of_detention,
        'detainedsince' => $interviewsheets->cldetained_since,
        'spouse' => $interviewsheets->clspouse,
        'spouseaddr' => $interviewsheets->claddress_of_spouse,
        'spousecon' => $interviewsheets->clcontact_no_of_spouse,
        'casename' => $casename,
        'casetype' => $casetype,
        'interviewer' => $interviewer,
        'involvement' => $involvement,
        'category' => $category,
        'controlno' => $controlno,
        'advtype' => $advtype,
        'advname' => $advname,
        'advaddr' => $advaddr,
        'lawyer' =>  $lawyer->efname . ' ' . $lawyer->emname . ' ' . $lawyer->elname,
        'date'=> $date
        ));

      
     }     
     }  return $pdf->download($interviewsheets->clfname . '_' . $interviewsheets->cllname . '_complete_interview_sheet.pdf');                                                 
    }
    }

    public function deny($id)
    {

        $denied = Client::find($id);
        $denied->cl_status = 'Denied';
        $date = date('F j Y ');
        $papersize = array(0, 0, 360, 360);
        $pdf = PDF::loadView('forms.deny', array(
        'name' => $denied->clfname . ' ' . $denied->clmname . ' ' . $denied->cllname,
        'address' =>$denied->claddress,
        'reason' =>$denied->reason,
        'date'=>$date
        
        ));
        $denied->save();
        
        
        

        
        return $pdf->download($denied->firstname . '_' . $denied->lastname . '_denied.pdf');
        return view('pdf.deny');

        $approved = Client::find($id);
        $approved->cl_status = 'Denied';
        $approved->save();
        return view('deny');


    }

    public function view($id)
    {
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
    public function print($id)
    {
       $client = Client::find($id);

         

      

 
      
  
       $papersize = array(0, 0, 360, 360);
       $pdf = PDF::loadView('pdf.affidavit', array(
        'name' => $client->clfname . ' ' . $client->clmname . ' ' . $client->cllname,
        'citizen' => $client->clcitizenship,
        'civilstat' => $client->clcivil_status,
        'spouse' => $client->clspouse,
        'address' => $client->claddress,
        
        

       ));

     

       return $pdf->download($client->clfname . '_' . $client->cllname . '_affidavit.pdf');
        return redirect('/home');                                
    }
    public function transfer($id){

        return view('casedistribution');
    }
    public function showlawyers()
    {
        
      $employees = Employee::where('position','Lawyer')
                            ->get();
                            
      return view('lawyers')->withEmployees($employees);
    }
    public function availablelawyer($id, Request $request )
    {
      $employee = Employee::where('id',$request->lawyer)->get();
      $handlecase = $request->canhandlecase;
      foreach($handlecase as $handlecases)
      {
        
        foreach($employee as $employees)
        {
      $employees -> status = $handlecases;
      $employees ->save();
        }
      }
      return redirect('/');
    }
    public function approvedtbl()
    {
        $clients = Client::where('cl_status','Approved')
        ->orderBy('cllname','asc')
        ->with('casetobehandled')
        ->with('adverse')
        ->get();
        
       
        return view('approvedtbl')->withClients($clients);
    }
    public function approvesheet()
    {
        return view('forms.interviewsheet');
    }

}

