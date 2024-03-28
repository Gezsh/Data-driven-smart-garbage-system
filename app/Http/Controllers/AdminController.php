<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
   public function register(){
      return view('/admin.login');
   }
    
   public function store(Request $request){
        dd($request);
   }

}
