@extends('layout.header')

@section('content')
<div class="container">
    <div class="row   align-items-center justify-content-center py-5">
     <div class="col-sm-7 ">
         <div class="container mt-3 ">


             <div class="card">

               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <img class="card-img-top rounded-circle"

                    src="{{$id=$profile->profile_pic? asset('images/'.$profile->profile_pic):asset('/images/no-person.jpg')}}" alt="Card image" style="width:60%;">


                </div>
                @if($id==true)
                    <form action="/uploadpic/{{auth()->user()->id}}" enctype="multipart/form-data" method="POST" class="d-flex d-flex align-items-center justify-content-center">
                        @csrf
                        @method('PUT')
                        <input type="file" required name="profilepic">
                        <button class="btn">upload profile picture</button>
                    </form>

                 @else

                 @endif
                <h2>my profile</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item lead">full name <span class="ml-5">{{$profile->fullname}}</span></li>

                    @if($profile->birthdate)
                    <li class="list-group-item lead">Bithday <span class="ml-5">{{$profile->birthdate}}</span></li>
                    @else

                   @endif

                   @if($profile->phonenumber)
                   <li class="list-group-item lead">phone number <span class="ml-5">{{$profile->phonenumber}}</span></li>
                   @else

                  @endif

                  @if($profile->studied)
                  <li class="list-group-item lead">hobby <span class="ml-5">{{$profile->study}}</span></li>
                  @else

                 @endif

                 @if($profile->hobby)
                 <li class="list-group-item lead">hobby <span class="ml-5">{{$profile->hobby}}</span></li>
                 @else

                @endif

                  @if($profile->relation)
                  <li class="list-group-item lead"> <span class="ml-5">{{$profile->relation}}</span></li>
                  @else

                 @endif

                 @if($profile->relation)
                 <li class="list-group-item lead"> current work <span class="ml-5">{{$profile->work}}</span></li>
                 @else

                @endif


                 @if($profile->location)
                 <li class="list-group-item lead">location <span class="ml-5">{{$profile->location}}</span></li>
                 @else

                @endif




                  </ul>

                  <a href="/editprofile/{{auth()->user()->fullname}}/{{auth()->user()->id}}" type="button" class="btn m-3">update profile</a>

               </div>


             </div>
           </div>
        </div>
    </div>
</div>

@endsection
