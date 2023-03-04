<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
      $this->validate($request,[
        'fullname'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'city'=>'required',
        'password'=>'required|confirmed|min:6',
        'password_confirmation'=>'sometimes|required_with:password'
      ]);

      $user=User::create([
        'fullname'=>$request->fullname,
        'email'=>$request->email,
         'password'=>Hash::make($request->password)
      ]);
      auth()->login($user);
     $id=auth()->user()->id;

      $profile=Profile::create([
        'user_id'=> $id,
        'fullname'=>$request->fullname,
        'phonenumber'=>$request->phone,
        'location'=>$request->city
    ]);


        return redirect('/home')->with('message','you register succesfully');

    }

    public function userlogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect()->back()->with('message','invalid login  detail');
        }
        else{
            Auth()->user();
            return redirect('/home');
        }
    }


    public function listofuser(){
        $id=auth()->id();
         $listofusers=Profile::latest()->where('id','<>',$id);

         if(request('search')){
            $listofusers->where('fullname','like','%'.request('search').'%')
            ->orwhere('phonenumber','like','%'.request('search').'%')
            ->orwhere('location','like','%'.request('search').'%');
           }
        return view('component.users',[
            'listofusers'=>$listofusers->get()
        ]);

    }

    public function destroy(){

            Session::flush();

            Auth::logout();

            return redirect('/login');

    }
}
