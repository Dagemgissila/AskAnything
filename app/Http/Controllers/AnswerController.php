<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    //
public function view(Request $request,$id){
    $answers=Answer::latest()->get()->where('question_id',$id);

    return view('component.showcomment',[
   'answers'=>$answers
    ]);





}
    public function reply(Request $request,$id){

       $this->validate($request,[
        'answer'=>'required'
       ]);

       $answer=new Answer();
       $answer->question_id=$id;
       $answer->user_id=auth()->user()->id;
       $answer->profile_id=auth()->user()->id;
       $answer->answer=$request->answer;

       $answer->save();
       return redirect($id.'/comments');


    }
}
