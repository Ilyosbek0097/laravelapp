<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
   public function index()
   {
       $boys =['Ilyosbek','Azamjon','Alijon','Bunyodjon'];
       return view('include.test',[
           'age'    =>  14, 
           'name'   =>  'Saydaliyev Ilyosjon',   
           'boys'   =>  $boys       
       ]);
    // return $name;
    
   }
   public function sendforma(Request $request)
   {
        return $request['name'];
   }
}
 