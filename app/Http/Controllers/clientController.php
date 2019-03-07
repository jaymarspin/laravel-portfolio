<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\works;


class clientController extends Controller
{
    public function index(Request $request){
        $data = $request->input("workScroll");
        return view("pages.home",compact("data"));
    }



    public function work_wrap(Request $request){

        $data = $request->input("category");
        $page = $request->input("page");
        $id_col[] = "";
      
        
        
        $works = DB::table("works")
        ->select("works.*")
        ->get();
        foreach($works as $v){
            $v->images = DB::table("images")->where('work_id','=',$v->id)->get();
        }
        if($data == "" || $data == null){
            foreach($works as $key => $item){
                $id_col[$key] = $item->id;
            }
        }else{
            
        $mobile = ["Android Studio"]; 
        $web = ["HTML","CSS","JQUERY","PHP"];
        $desktop = ["java","javafx"];
        switch($data){
            case "Web Development":
                $stack = $web;
                break;
            case "Software Dev.(Desktop)":
                $stack = $desktop;
                break;
            case "Mobile Dev":
                $stack = $mobile;
                break;
            case "Database":
                $stack = $mobile;
                break;
            case "Photoshop":
                $stack = $mobile;
                break;

        }
        
        
        foreach($works as $key => $item){
             $haystack = explode(",",$item->technologies);
             foreach($haystack as $point => $value){
                 $pass = false;
                 foreach($stack as $row){
                        if($row == $value){
                            
                            $id_col[$key] = $item->id;
                            $pass = true;
                        }
                 }
                 if($pass == true)break;
             }
        }
        }

        
       return view("pages.work-wrapper",["works"=>$works,"id_col"=>$id_col,"page"=>$page]);
    }
    
    public function work_further(Request $request){

        $data = $request->input("work");
        if($data != "" || $data != ""){
            $works = DB::table('works')->where('id', $data)->get();
            foreach($works as $v){
                $v->images = DB::table("images")->where('work_id','=',$v->id)->get();
            }
            // echo "<pre>";
            // print_r($works);

            return view("pages.work-further-view",compact("works"));
        }else {
            echo "bad";
        }
    }
}
