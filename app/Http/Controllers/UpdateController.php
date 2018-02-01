<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Language;
use App\Education;
use App\Involvement;
use App\Category;
use App\Position;


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
        return redirect()->to('guest');
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
       return redirect('/language/register');
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
       return redirect('/education/register');
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
       return redirect('/caseinvolvement/register');
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
       return redirect('/position/register');
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
       return redirect('/casecategory/register');
    }
    
}

