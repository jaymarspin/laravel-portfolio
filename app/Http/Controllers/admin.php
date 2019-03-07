<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\works;
use App\messages;


class admin extends Controller
{
   public function index(){
   	return view("admin.ad");
   }

   public function statistics(){
      return view("admin.statistics");
      if(!session("admin")){
         return view("admin.admin-login");
      }
   }

   public function login(){
      
   	return view("admin.admin-login");
   }

   public function messages(){
      $messages = messages::orderBy("created_at","desc")->paginate(15);
      return view("admin.messages",compact("messages"));
   	
   }
    public function works(Request $request){
       $works = works::orderBy("created_at","desc")->paginate(10);
       $request->session()->keep(['username', 'email']);
       echo session("admin");

   	//return view("admin.works",compact("works"));
   }
}
