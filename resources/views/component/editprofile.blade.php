@extends('layout.header')

@section('content')


<div class="container">



    <div >
     <form class="w-100 w-sm-50" enctype="multipart/form-data" action="/editprofile/{{$profile->user_id}}" method="POST">
         @csrf
         @method('PUT')
         <div class="row  my-5 align-items-center justify-content-center">


         <div class="col-8 my-2">
           <label for="">phonenumber</label>
           <input type="tel" name="phonenumber" value="{{$profile->phonenumber}}" class="form-control">

         </div>

         <div class="col-8 my-2">
            <label for="">birthdate</label>
            <input type="date" name="birthdate" value="{{$profile->birthdate}}" class="form-control">

          </div>

          <div class="col-8 my-2">
            <label for="">city</label>
            <input type="text" name="location"  value="{{$profile->location}}" class="form-control">

          </div>

          <div class="col-8 my-2">
            <label for="">studied</label>
            <input type="text" name="study" value="{{$profile->study}}"  class="form-control">

          </div>

          <div class="col-8 my-2">
            <label for="">current work</label>
            <input type="text" name="work" value="{{$profile->work}}"  class="form-control">

          </div>

          <div class="col-8 my-2">
            <label for="">hobby</label>
            <input type="text" name="hobby" value="{{$profile->hobby}}"  class="form-control">

          </div>

          <div class="col-8 my-2">
            <label for="">relation status</label>
            <input type="text" name="relation" value="{{$profile->relation}}"  class="form-control">

          </div>




             <div class="col-6 my-4">
               <button type="submit" class="btn col-8">Update  Profile</button>
             </div>
         </div>

     </div>
       </form>
    </div>

</div>
</div>
@endsection
