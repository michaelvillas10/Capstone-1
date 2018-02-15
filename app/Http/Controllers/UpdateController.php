<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Language;
use App\Education;
use App\Involvement;
use App\Category;
use App\Position;
use App\courttype;
use App\Court;
use App\Schedule;


class UpdateController extends Controller
{
    public function showclientedit($id)
    {
    	$client = Client::find($id);
    	return view('client_edit')->withClients($client);
    }

    public function edit($id, Request $request)
    {
    	$this->validate($request, [
            
        ]);

        $client = Client::find($id);
    	$client->name = $request->name;
    	$client->mobilenumber = $request->mobilenumber;
    	$client->email = $request->email;
    	$client->idcard = $request->idcard;
    	$client->save();

    	//Flashy::success('Succesfully edited guest', '#');
        return redirect('/client/register');
    }

    public function showlangugeedit($id)
    {
        $language = Language::find($id);
        return view('maintenance.ls_edit')->withLanguages($language);
    }
   

    public function languageedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $language = Language::find($id);

        $language-> name = $request->name;
       
        $language->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/language/show');
    }
    public function showeducedit($id)
    {
        $education = Education::find($id);
        return view('maintenance.education_edit')->withEducations($education);
    }
     
     public function educedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $educ = Education::find($id);

        $educ-> name = $request->name;
       
        $educ->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/education/show');
    }
    public function showinvoedit($id)
    {
        $involvement = Involvement::find($id);
        return view('maintenance.caseinvolvement_edit')->withInvolvements($involvement);
    }
     public function invoedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $invo = Involvement::find($id);

        $invo-> name = $request->name;
       
        $invo->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/caseinvolvement/show');
    }
    public function showposeedit($id)
    {
        $positions = Position::find($id);
        return view('maintenance.position_edit')->withPositions($positions);
    }
    public function posedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $pos = Position::find($id);

        $pos-> name = $request->name;
       
        $pos->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/position/show');
    }
    public function showccedit($id)
    {
        $category = Category::find($id);
        return view('maintenance.casecategory_edit')->withCategory($category);
    }
    public function ccedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $cc = Category::find($id);

        $cc-> name = $request->name;
       
        $cc->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/casecategory/show');
    }
    public function showctedit($id)
    {
        $courttype = courttype::find($id);
        return view('maintenance.courttype_edit')->withcourttypes($courttype);
    }
    public function ctedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $ct = courttype::find($id);

        $ct-> name = $request->name;
       
        $ct->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/courttype/show');
    }
    public function showcouedit($id)
    {
        $court = Court::find($id);
        $courttypes = courttype::all();
        return view('maintenance.court_edit')->withCourts($court)
        ->withcourttypes($courttypes);
    }
    public function couedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'type'=>'required',
        ]);
 
        $cou = Court::find($id);

        $cou-> name = $request->name;
        $cou-> type = $request->type;
       
        $cou->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/court/show');
    }
    public function showschededit($id)
    {
        $sched = Schedule::find($id);
        return view('maintenance.schedule_edit')->withSchedules($sched);
    }
      public function schededit($id, Request $request)
    {
        $this->validate($request, [
           
        ]);
 
        $sched = Schedule::find($id);

        $sched-> name = $request->name;
        $sched-> start = $request->start;
        $sched-> end = $request->end;
        $sched->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/schedule/show');
    }

    
}

