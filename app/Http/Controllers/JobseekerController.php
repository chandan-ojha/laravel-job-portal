<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Jobseeker;


class JobseekerController extends Controller
{
    //
    function login(Request $req){
    	$jobseeker= Jobseeker::where(['email'=>$req->email])->first();
    	
    	if(!$jobseeker || !Hash::check($req->password,$jobseeker->password))
    	{
    		return "Username or password is not matched";
    	}
    	else{
    		$req->session()->put('jobseeker',$jobseeker);
    		return redirect('/index');
    	}

    }
    function register(Request $req){
        //return $req->input();
        $jobseeker= new Jobseeker;
        $jobseeker->name=$req->name;
        $jobseeker->email=$req->email;
        $jobseeker->password=Hash::make($req->password);
        $jobseeker->save();
        return redirect('/signIn');


    } 
   


}
