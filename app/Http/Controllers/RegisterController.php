<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use App\Http\Controllers\Controller;
use App\Client;
use App\Involvement;
use App\Category;
use App\Education;
use App\Language;
use App\Position;
use Session;
use DB;

class RegisterController extends Controller
{
    



    public function showclientregister(){
    	return view('request');
    }

    public function clientregister(Request $request){
        //dd('gdgfgf'); 
    	$this->validate($request, array(
                'fname'=>'required',
                'mname'=>'required',
                'lname'=>'required',
                'religion'=>'required',
                'Citizenship'=>'required',
                'Address'=>'required',
                'Email'=>'required',
                'Income'=>'required',
                'Detained'=>'required',
                'cldetained_since'=>'required',
                'Birthday'=>'required',
                'gender'=>'required',
                'civilstat'=>'required',
                'Educational'=>'required',
                'Language'=>'required',
                'Contact'=>'required',
              
                ));

            $client = new Client;
     
       
        $client-> clfname = $request->fname;
        $client-> clmname = $request->mname;
        $client-> cllname = $request->lname;
        $client-> clreligion = $request->religion;
        $client-> clcitizenship = $request->Citizenship;
        $client-> claddress = $request->Address;
        $client-> clemail = $request->Email;
        $client-> clmonthly_net_income = $request->Income;
        $client-> cldetained = $request->Detained;
        $client-> cldetained_since = $request->DetainedDate;
        $client-> clbdate = $request->Birthday;
        $client-> clgender = $request->gender;
        $client-> clcivil_status = $request->civilstat;
        $client-> cleducational_attainment = $request->Educational;
        $client-> cllanguage = $request->Language;
        $client-> clcontact_no = $request->Contact;
        //$client-> clspouse = $request->clspouse;
       //$client-> claddress_of_spouse = $request->claddress_of_spouse;
        //$client-> clcontact_no_of_spouse = $request->clcontact_no_of_spouse;
        $client-> clplace_of_detention = $request->DetainedPlace;
       
        $client->save();
       
     
        
        

   
        //return redirect()->route('interviewees.create');

    }
     public function casetbhregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'casename'=>'required',
                'interviewer'=>'required',
                'natureofcase'=>'required',
                'nor'=>'required',
                'ct'=>'required',
                'cc'=>'required',
              
              
                ));

            $casetobehandled = new casetobehandled;
     
       
        $casetobehandled-> casename = $request->casename;
        $casetobehandled-> interviewer = $request->interviewer;
        $casetobehandledt-> nature_of_case = $request->natureofcase;
        $casetobehandled-> nature_of_request = $request->nor;
        $casetobehandled-> clcase_involvement = $request->ct;
        $casetobehandled-> clcomplainant_victim_of = $request->cc;
        $casetobehandled-> clients_id = $request->$clientid;
       
       
        $casetobehandled->save();
       
     
        
        

   
        //return redirect()->route('interviewees.create');

    }
     public function adverseregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'fname'=>'required',
                'mname'=>'required',
                'lname'=>'required',
                'address'=>'required',
                
                'atype'=>'required',
              
              
                ));

            $adverse = new Adverse;
     
       
        $adverse-> advprtyfname = $request->fname;
        $adverse-> advprtymname = $request->mname;
        $adverse-> advprtylname = $request->lname;
        $adverse-> advprtyaddress = $request->address;
        $adverse-> advprtytype = $request->atype;
        
        $adverse-> casetobehandleds_id = $request->$caseid;
       
       
        $adverse->save();
       
     
        
        

   
        //return redirect()->route('interviewees.create');

    }
     public function showpositionregister(){

        $positions = Position::all();
        return view('maintenance.position')->withPositions($positions);
    }

    public function positionregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $position = new Position;
     
       
        $position-> name = $request->name;
       
       
        $position->save();
       
     
        return redirect('/position/register');
        

   
        //return redirect()->route('interviewees.create');

    }
     public function showeducationregister(){

        $education = Education::all();
        return view('maintenance.education')->withEducations($education);
    }

    public function elregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required', 
               
              
                ));

            $el = new Education;
     
       
        $el-> name = $request->name;
       
       
       
        $el->save();
       
     
        
        

   
       return redirect('/education/register');

    }
     public function showlanguageregister(){
        $languages = Language::all();
        return view('maintenance.ls')->withLanguages($languages);
    }

    public function lsregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
               
              
                ));

            $language = new Language;
     
       
        $language-> name = $request->name;
       
       
        $language->save();
       
     
        
        

   
       return redirect('/language/register');

    }
     public function showcasecategoryregister(){
        $category = Category::all();
        return view('maintenance.casecategory')->withCategory($category);
    }

    public function ccregister(Request $request){
        //dd('gdgfgf'); sd
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $cc = new Category;
     
       
        $cc-> name = $request->name;
        
       
        $cc->save();
       
     
        
        

   
       return redirect('/casecategory/register');

    }
     public function showcaseinvolvementregister(){
        $involvement = Involvement::all();
        return view('maintenance.caseinvolvement')->withInvolvement($involvement);
    }

    public function ciregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
               
              
                ));

            $ci = new Involvement;
     
       
        $ci-> name = $request->name;
      
       
        $ci->save();
       
     
        
        

   
       return redirect('/caseinvolvement/register');

    }
}

