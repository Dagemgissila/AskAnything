@extends('layout.header')

@section('content')

<div class="container">
    <div class="row   align-items-center justify-content-center py-5">
     <div class="col-sm-7 ">
         <div class="container mt-3 ">

                @if($listofusers->count()>0)

                @foreach ($listofusers as  $user)


             <a href="/users/{{$user->fullname}}/{{$user->id}}" class="text-decoration-none">
                <div class="card my-2">
                    <div class="card-header p-2">
                       <div class="d-flex align-items-center">
                          <img src="{{$user->profile_pic? asset('images/'.$user->profile_pic):asset('/images/no-person.jpg')}}" class="rounded-circle" style="width:15%;height:15%;" alt="img">
                      <h3 class="mx-3">{{$user->fullname}}</h3>
                   </div>
                 </div>
             </a>
            @endforeach
         @else
                no users found
         @endif









             </div>


             </div>
           </div>
        </div>
    </div>
 </div>
</div>
@endsection
