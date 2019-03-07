<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\works;
use App\images;
use App\messages;

class admin_query extends Controller
{
    public function store_works(request $request){
		$input=$request->all();
		$images=array();
    	$this->validate($request,[
    		"title"=>"required",
    		"description"=>"required",
				"technology"=>"required",
				"demo"=>"required",
				"code"=>"required",
				"video"=>"required",
    	]);
    	$work = new works;
    	$work->title = $request->input('title');
    	$work->description = $request->input('description');
			$work->technologies = $request->input('technology');
			$work->demo = $request->input('demo');
			$work->code = $request->input('code');
			$work->url = $request->input('video');
		
		
		$work->save();
		
		$id = DB::table('works')->where('title', $work->title)->first();
		
		$path = public_path("/works_images");
		$image = $request->file('photos');
			for($i = 0;$i < sizeof($image);$i++){


				$input['imagename'] = uniqid("".true).".".$image[$i]->getClientOriginalExtension();
				$image[$i]->move($path,$input['imagename']);
				$images = new images;
				$images->work_id = $id->id;
				$images->imgname = strval($input['imagename']);
				$images->save();
			}


        return redirect("/works")->with('success','success');
	}
	public function message(Request $request){
		
		$this->validate($request,[
			"person"=>"required",
			"topic"=>"required",
			"message"=>"required"

		]);

		$message = new messages;
		$message->person = $request->input("person");
		$message->topic = $request->input("topic");
		$message->message = $request->input("message");
		$message->save();
		return redirect("/");
	}
	public function logs(Request $request){
		$this->validate($request,[
			"username" => "required",
			"password" => "required"
		]);
		if($request->input("username") == "jaymar" && $request->input("password") == "daligdig123"){
			$request->session()->keep(['admin']);
			return redirect("/works")->with("admin","on");
		}else{
			return redirect("/login")->with("errorlog","login failed");
		}
	}

}
