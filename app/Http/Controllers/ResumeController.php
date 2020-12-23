<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

class ResumeController extends Controller
{
    //
    function SaveResume(Request $req){
     $resume=new Resume;
     $resume->name=$req->name;
     $resume->address=$req->address;
     $resume->phonenumber=$req->phonenumber;
     $resume->email=$req->email;
     $resume->CareerObjective=$req->CareerObjective;
     $resume->JobExperience=$req->JobExperience;
     $resume->AcademicQualification=$req->AcademicQualification;
     $resume->KeySkills=$req->KeySkills;
     $resume->Activites=$req->Activites;
     $resume->save();
     return "Resume information saved successfully in database";

    }

    function viewresume($id)
    {
        $data= Resume::find($id);
        return view('resume',['resume'=>$data]);
    }

}
