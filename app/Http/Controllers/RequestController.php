<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;

class RequestController extends Controller
{
    public function approve($id){
      $approved = Client::find($id);
        $approved->cl_status = 'Approved';
        $approved->save();
    }

    public function deny(){
        $approved = Client::find($id);
        $approved->cl_status = 'Denied';
        $approved->save();
        return view('deny');

    }

    public function view(){

    }
}
