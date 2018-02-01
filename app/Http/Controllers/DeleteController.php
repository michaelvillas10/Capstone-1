<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;
use App\Education;
use App\Involvement;
use App\Category;
use App\Position;

class DeleteController extends Controller
{
    public function languagedelete($id)
    {
       
        $language = Language::find($id);
        
        $language->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/language/register');
    }
    public function educdelete($id)
    {
       
        $educ = Education::find($id);
        
        $educ->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/education/register');
    }
    public function invodelete($id)
    {
       
        $invo = Involvement::find($id);
        
        $invo->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/caseinvolvement/register');
    }
     public function posdelete($id)
    {
       
        $pos = Position::find($id);
        
        $pos->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/position/register');
    }
     public function ccdelete($id)
    {
       
        $cc = Category::find($id);
        
        $cc->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/casecategory/register');
    }
}
