@extends('layout.header')

@section('content')
<div class="container">
    <div class="row   align-items-center justify-content-center py-5">
     <div class="col-sm-7 ">
         <div class="container mt-3 ">




             <div class="card">

               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-center">
                    <a href="{{asset('images/'.$profile->profile_pic)}}" class="d-flex align-items-center justify-content-center">
                        <img class="card-img-top rounded-circle"

                    src="{{$profile->profile_pic? asset('images/'.$profile->profile_pic):asset('/images/no-person.jpg')}}" alt="Card image" style="width:100%;">
                    </a>


                </div>


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



               </div>


             </div>
           </div>
        </div>
    </div>
</div>

@endsection
