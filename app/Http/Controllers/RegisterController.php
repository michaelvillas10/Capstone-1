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
use App\casetobehandled;
use App\Adverse;
use App\Citizenship;
use App\Religion;
use App\Employee;
use App\Lawsuit;
use App\Schedule;
use App\courttype;
use App\Court;
use Session;
use DB;

class RegisterController extends Controller
{
   // $event = Event::where('status', '1')->with('sponsor')->first();
        
        //$guest = Guest::where('group_id',$group->id)->get();
      

        // return $schedule;
        // if(empty($event))
        // {
       
        //     return view('maintenance');
        // }
        // else{
        // $schedule = Schedule::where('event_id', $event->id)->with('speaker')->get();
        // $group = Group::where('event_id', $event->id)->get();
        
    
public function showreqtable(){
    $clients = Client::where('cl_status','Pending')->orderBy('cllname','asc')
    // ->with('casetobehandled')
    // ->with('adverse')
    ->get();
   
        
    return view('maintenance.client_table')->withClients($clients);
}


    public function showclientregister(){
        $clients = Client::orderBy('cllname','asc')->get();
        
        $religions = Religion::orderBy('name','asc')->get();
        $educations = Education::orderBy('name','asc')->get();
        $involvements = Involvement::orderBy('name','asc')->get();
        $languages = Language::orderBy('name','asc')->get();
        $citizenships = Citizenship::orderBy('name','asc')->get();
    	return view('maintenance.clientreg')->withClients($clients)
        ->withReligions($religions)
        ->withEducations($educations)
        ->withInvolvements($involvements)
        ->withLanguages($languages)
        ->withCitizenships($citizenships);
    }

    public function clientregister(Request $request){
        //dd('gdgfgf'); 
    	// $this->validate($request, array(
     //            'fname'=>'required',
     //            'mname'=>'required',
     //            'lname'=>'required',
     //            'religion'=>'required',
     //            'Citizenship'=>'required',
     //            'Address'=>'required',
     //            'Email'=>'required',
     //            'Income'=>'required',
     //            'Detained'=>'required',
     //            'cldetained_since'=>'required',
     //            'Birthday'=>'required',
     //            'gender'=>'required',
     //            'civilstat'=>'required',
     //            'Educational'=>'required',
     //            'Language'=>'required',
     //            'Contact'=>'required',

     //            'casename'=>'required',
     //            'interviewer'=>'required',
     //            'natureofcase'=>'required',
     //            'nor'=>'required',
     //            'ct'=>'required',
     //            'cc'=>'required',
              
                // ));

            $client = new Client;
      
       
        $client-> clfname = $request->fname;
        $client-> clmname = $request->mname;
        $client-> cllname = $request->lname;
        $client-> clreligion = $request->religion;
        $client-> clcitizenship = $request->Citizenship;
        $client-> claddress = $request->Address;
        $client-> clemail = $request->Email;
        $client-> clmonthly_net_income = $request->Income;

        $client-> cldetained = $request->detained;
        $client-> cldetained_since = $request->DetainedDate;
        $client-> clbdate = $request->Birthday;
        $client-> clgender = $request->gender;
        $client-> clcivil_status = $request->civilstat;
        $client-> cleducational_attainment = $request->Educational;
        $client-> cllanguage = $request->Language;
        $client-> clcontact_no = $request->Contact;
        $client-> clspouse = $request->clspouse;
       $client-> claddress_of_spouse = $request->claddress_of_spouse;
        $client-> clcontact_no_of_spouse = $request->clcontact_no_of_spouse;
        $client-> clplace_of_detention = $request->DetainedPlace;
        $client-> nature_of_request = $request->nor;
       

       
        
        
        $client->save();
      
        
   
        return redirect('/casetbh/register');

    }
       public function showcasetbhregister(){
         $clients = Client::select('id')->orderBy('id','desc')->get();
        $employees = Employee::orderBy('efname','asc')->get();
        $lawsuits = Lawsuit::orderBy('name','asc')->get();
        $category = Category::orderBy('name','asc')->get();
        $involvements = Involvement::orderBy('name','asc')->get();
         
        return view('maintenance.casereg')->withClients($clients)
        ->withLawsuits($lawsuits)
        ->withCategory($category)
        ->withInvolvements($involvements)
        ->withEmployees($employees);
    }
     public function casetbhregister(Request $request){
        
        // $this->validate($request, array(
        //         'casename'=>'required',
        //         'interviewer'=>'required',
        //         'natureofcase'=>'required',
        //         'nor'=>'required',
        //         'ct'=>'required',
        //         'cc'=>'required',
              
              
        //         ));
        $clients = Client::find($id)->orderBy('id','desc')->take(1)->get();
            
            $casetobehandled = new casetobehandled;
    
       
        $casetobehandled-> casename = $request->lawsuit;
        $casetobehandled-> interviewer = $request->employee;
         $casetobehandled-> nature_of_case ="w";
       
        $casetobehandled-> clcase_involvement = $request->involvement;
        $casetobehandled-> clcomplainant_victim_of = $request->Category;
       
      
             $casetobehandled-> clients_id = $clients; 
       
            
        
       
       
        $casetobehandled->save();
       
      return redirect('/adverse/register');
  }
        
        
public function showadverseregister(){
        $clients = Client::orderBy('cllname','asc')->get();
        
        $religions = Religion::orderBy('name','asc')->get();
        $educations = Education::orderBy('name','asc')->get();
        $involvements = Involvement::orderBy('name','asc')->get();
        $languages = Language::orderBy('name','asc')->get();
        $citizenships = Citizenship::orderBy('name','asc')->get();
        return view('maintenance.adversereg')->withClients($clients)
        ->withReligions($religions)
        ->withEducations($educations)
        ->withInvolvements($involvements)
        ->withLanguages($languages)
        ->withCitizenships($citizenships);
    }
   
        //return redirect()->route('interviewees.create');

    
     public function adverseregister(Request $request){
        //dd('gdgfgf'); 
        // $this->validate($request, array(
        //         'fname'=>'required',
        //         'mname'=>'required',
        //         'lname'=>'required',
        //         'address'=>'required',
                
        //         'atype'=>'required',
              
              
        //         ));


         
          $adverse = new Adverse;
      
       $casetbh = casetobehandled::find($id)->orderBy('id','desc')->take(1)->get();
     
        $adverse-> advprtyfname = $request->fname;
        $adverse-> advprtymname = $request->mname;
        $adverse-> advprtylname = $request->lname;
        $adverse-> advprtyaddress = $request->addr;
        $adverse-> advprtytype = $request->atype;
        $adverse-> casetobehandleds_id = $casetbh;
       
        
      
        $adverse->save();


      return redirect('/client/show');
       
       

     
       
       

      
     
        
        

   
        //return redirect()->route('interviewees.create');

    }
     public function showposition(){

        $positions = Position::all();
        return view('maintenance.position')->withPositions($positions);
    }
     public function showpositionregister(){

       
        return view('maintenance.position_register');
    }

    public function positionregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $position = new Position;
     
       
        $position-> name = $request->name;
       
       
        $position->save();
       
     
        return redirect('/position/show');
        

   
        //return redirect()->route('interviewees.create');

    }

     public function showeducation(){

        $education = Education::all();
        return view('maintenance.education')->withEducations($education);
    }

     public function showeducationregister(){

       
        return view('maintenance.education_reg');
    }

    public function elregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required', 
               
              
                ));

            $el = new Education;
     
       
        $el-> name = $request->name;
       
       
       
        $el->save();
       
     
        
        

   
       return redirect('/education/show');

    }
     public function showlanguage(){
        $languages = Language::all();
        return view('maintenance.ls')->withLanguages($languages);
    }
     public function showlanguageregister(){
     
        return view('maintenance.ls_reg');
    }

    public function lsregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
               
              
                ));

            $language = new Language;
     
       
        $language-> name = $request->name;
       
       
        $language->save();
       
     
        
        

   
       return redirect('/language/show');

    }
     public function showcasecategory(){
       $category = Category::all();
        return view('maintenance.casecategory')->withCategory($category);
    }
    public function showcasecategoryregister(){
        
        return view('maintenance.casecategory_reg');
    }

    public function ccregister(Request $request){
        //dd('gdgfgf'); sd
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $cc = new Category;
     
       
        $cc-> name = $request->name;
        
       
        $cc->save();
       
     
        
        

   
       return redirect('/casecategory/show');

    }
     public function showcaseinvolvement(){
        $involvements = Involvement::all();
        return view('maintenance.caseinvolvement')->withInvolvements($involvements);
    }
     public function showcaseinvolvementregister(){
       
        return view('maintenance.caseinvolvement_reg');
    }

    public function ciregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
               
              
                ));

            $ci = new Involvement;
     
       
        $ci-> name = $request->name;
      
       
        $ci->save();
       
     
        
        

   
       return redirect('/caseinvolvement/show');

    }
     public function schedule(){
        $schedules = Schedule::all();
        return view('maintenance.schedules')->withSchedules($schedules);
    }
     public function showschedule(){
        $schedules = Schedule::all();
        return view('maintenance.showschedule')->withSchedules($schedules);
    }

    public function scheduleregister(Request $request){
        //dd('gdgfgf'); 
        // $this->validate($request, array(
                // 'name'=>'required',
               
              
                // ));

            $sched= new Schedule;
     
       
        $sched-> name = $request->name;
        $sched-> start =$request->start;
        $sched-> end =$request->end;
      
       
        $sched->save();
       
     
        
        

   
       return redirect('/schedule/show');

    }
     public function showcourttype(){
        $courttypes = courttype::all();
        return view('maintenance.courttype')->withcourttypes($courttypes);
    }
        public function showcourttyperegister(){
       $courttypes = courttype::all();
        return view('maintenance.courttype_reg')->withcourttypes($courttypes);
    }

    public function courttyperegister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
               
              
                ));

            $ct = new courttype;
     
       
        $ct-> name = $request->name;
      
       
        $ct->save();
       
     
        
        

   
       return redirect('/courttype/show');

    }
     public function showcourt(){
        $courts = Court::all();
        $courttypes = courttype::all();
        return view('maintenance.court')->withCourts($courts)
        ->withcourttypes($courttypes);
    }
     public function showcourtregister(){
       $courttypes = courttype::all();
        return view('maintenance.court_reg') ->withcourttypes($courttypes);
    }

    public function courtregister(Request $request){
        //dd('gdgfgf'); 
        $this->validate($request, array(
                // 'name'=>'required',
                // 'type'=>'required',
              
                ));

            $cou = new Court;
     
       
        $cou-> name = $request->name;
        $cou-> type = $request->type;
      
       
        $cou->save();
       
     
        
        

   
       return redirect('/court/show');

    }


}

