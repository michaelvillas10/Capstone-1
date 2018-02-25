<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;
use App\Education;
use App\Involvement;
use App\Category;
use App\Position;
use App\courttype;
use App\Court;
use Schedule;

class DeleteController extends Controller
{
    public function languagedelete($id)
    {
       
        $language = Language::find($id);
        
        $language->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/language/show');
    }
    public function educdelete($id)
    {
       
        $educ = Education::find($id);
        
        $educ->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/education/show');
    }
    public function invodelete($id)
    {
       
        $invo = Involvement::find($id);
        
        $invo->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/caseinvolvement/show');
    }
     public function posdelete($id)
    {
       
        $pos = Position::find($id);
        
        $pos->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/position/show');
    }
     public function ccdelete($id)
    {
       
        $cc = Category::find($id);
        
        $cc->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('/casecategory/show');
    }
      public function ctdelete($id)
    {
       
        $ct = courttype::find($id);
        
        $ct->delete();

        return redirect('/courttype/show');
    }
      public function coudelete($id)
    {
       
        $cou = Court::find($id);
        
        $cou->delete();

        return redirect('/court/show');
    }
     public function scheddelete($id)
    {
       
        $sched = Schedule::find($id);
        
        $sched->delete();

        return redirect('/schedule/show');
    }


}
