<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuestionController extends Controller
{
    public function index(){
            $questions=Question::latest()->where('user_id',auth()->id());

            if(request('search')){
                $questions->where('category','like','%'.request('search').'%')
                ->orwhere('question','like','%'.request('search').'%');
               }

        return view('component.askquestion',[
            'questions'=>$questions->get()
        ]);

        // return Question::find(7)->user->fullname;
    }

    public function home(){
        $questions=Question::latest();

        if(request('search')){
            $questions->where('category','like','%'.request('search').'%')
            ->orwhere('question','like','%'.request('search').'%');
           }

        return view('component.home',[
           'questions'=>$questions->get()
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'question'=>'required'
        ]);

        $question=new Question();
        $question->question=$request->question;
        $question->category=$request->category;
        if($request->hasfile('picture')){
            $file=$request->file('picture');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'. $extension;
            $file->move('questionPic/picture',$filename);
            $question->image=$filename;
           }

           $question->user_id=auth()->user()->id;
           $question->profile_id=auth()->user()->id;
       $question->save();

        return redirect()->back()->with('message','question post succesfully');

    }


}
