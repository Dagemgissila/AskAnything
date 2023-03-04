<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //

    public function show(){
        $id=auth()->user()->id;
        $profile=Profile::find($id);

        return view('component.profile',[
            'profile'=>$profile
        ]);

    }

    public function uploadpic(Request $request,$id){
        $profile=Profile::find($id);
        if($request->hasfile('profilepic')){
            $file=$request->file('profilepic');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'. $extension;
            $file->move('images/',$filename);
            $profile->profile_pic=$filename;
           }
           $profile->save();
           return redirect()->back();
    }


    public function showedit(Request $request,$name,$id){
        $profile=Profile::find($id);
        return view('component.editprofile',[
            'profile'=>$profile
        ]);
    }

    public function edit(Request $request,$id){

        $profile=Profile::find($id);
        $profile->phonenumber=$request->phonenumber;
        $profile->location=$request->location;
        $profile->work=$request->work;
        $profile->hobby=$request->hobby;
        $profile->study=$request->study;
        $profile->birthdate=$request->birthdate;
        $profile->relation=$request->relation;
        $profile->save();

        return redirect('/myprofile')->with('message','profile update succesfully');

    }

    public function userprofile(Request $request,$name,$id){
        $profile=Profile::find($id);
        return view('component.viewuser',[
            'profile'=>$profile
        ]);

    }
}
