@extends('layout.header')

@section('content')


<div class="container">
    <div class="row   align-items-center justify-content-center py-5">
     <div class="col-sm-7 ">
         <div class="container mt-3 ">

       @if($answers->count()>0)

       @foreach ($answers as $answer)



             <div class="card my-4">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <a href="{{asset('images/'.$answer->answeruser->profile_pic)}}">
                        <img src="{{$answer->answeruser->profile_pic? asset('images/'.$answer->answeruser->profile_pic):asset('/images/no-person.jpg')}}" class="rounded-circle" style="width:12%;height:12%;" alt="img">
                     </a>


                 <a class="text-decoration-none " href="/users/{{$answer->answeruser->fullname}}/{{$answer->answeruser->user_id}}"><h3>{{$answer->answeruser->fullname}}</h3></a>

                </div>
                 {{-- <p class="my-2"><a href="" class="btn btn-dark btn-sm">category {{$question->category}}</a></p> --}}
                 <p class="card-text mx-3">
                     {{$answer->answer}}
                 </p>

               </div>




              </div>
              @endforeach
             </div>






         </div>

           @else
            <h1>no comment</h1>

           @endif
        </div>




      </div>
    </div>
 </div>
@endsection
