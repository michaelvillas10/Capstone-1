<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\casetobehandled;
use App\approvedcase;
use App\Client;
use App\Adverse;
use App\Status;
use App\Http\Controllers\Controller;

class ManageCaseController extends Controller
{
    public function showmanagecase()
    {
      $allcases = Client::where('cl_status','Approved')
      ->with('casetobehandled')
      ->with('adverse')
      ->get();
      return view('managecase')->withAllcases($allcases);
    }
    public function editcase($id)
    {
      $editcase = Client::find($id)
      ->where('cl_status','Approved')
      ->with('casetobehandled')
      ->with('adverse')
      ->get();
      $status = Status::all();
      

      return view('editcase')->witheditcase($editcase)
                             ->withStatus($status);
    }
    public function updatecase(Request $request,$id)
    {
      $updatecase = casetobehandled::find($id);
      
      $updateadverse = Adverse::find($id);
      
            

      
      $updatecase->casename = $request->lawsuit;
      $updatecase->interviewer = $request->interviewer;
      $updatecase->clcomplainant_victim_of = $request->casecategory;
      $updatecase->nature_of_case = $request->casetype;
      $updatecase->clcase_involvement = $request->involvement;
      $updatecase->case_status = $request->case_status;
      $updateadverse->advprtytype = $request->type;
      $updateadverse->advprtyfname = $request->fname;
      if(empty($request->mname)){
      $updateadverse->advprtymname = $request->mname;
                                }
      $updateadverse->advprtylname = $request->lname;
      $updateadverse->advprtyaddress = $request->addr;
      $updatecase->save();
      $updateadverse->save();
      return redirect('/casetbh/show');
         


    }
      
}
