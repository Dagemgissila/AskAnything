@extends('layout.header')

@section('content')

<div class="container">
   <div class="row   align-items-center justify-content-center py-5">
    <div class="col-sm-7 ">
        <div class="container mt-3 ">

      @if($questions->count()>0)

      @foreach ($questions as $question)



            <div class="card my-4">
              <div class="card-body">
                 <div class="d-flex align-items-center">
                    <img src="{{$question->myprofile->profile_pic? asset('images/'.$question->myprofile->profile_pic):asset('/images/no-person.jpg')}}" class="rounded-circle" style="width:12%;height:12%;" alt="img">
                <a class="text-decoration-none" href="/users/{{$question->myprofile->fullname}}/{{$question->user_id}}"><h2>{{$question->myprofile->fullname}}</h2></a></div>


                <p class="my-2"><a href="/category={{$question->category}}" class="btn btn-dark btn-sm">category {{$question->category}}</a></p>
                <p class="card-text">
                    {{$question->question}}
                </p>

              </div>
             <a href="{{asset('questionPic/picture/'.$question->image)}}">
                <img
                style="width:100%;"
                class="hidden p-3 w-48 mr-6 md:block"
                src="{{$question->image? asset('questionPic/picture/'.$question->image):asset('/images/no-image.png')}}"
                alt=""
            />
             </a>
                 <div class="">




                           <div class="row mx-2 align-items-center justify-content-center">
                            <form action="/answer/{{$question->id}}" method="POST" class="d-flex  align-items-center justify-content-center">
                                @csrf
                            <div class="col-10">

                                <textarea class="form-control m-1" name="answer" placeholder="write your answer here" name="question" id="" rows="3"></textarea>
                              </div>

                            <button class="btn mx-2" type="submit">send</button>

                        </form>
                        <div class="row mt-2 justify-content-center">

                            <a href="/{{$question->id}}/comments" class="btn btn-dark col-8">view comment</a>

                              </div>
                           </div>


                 </div>
            </div>





          @endforeach
        </div>
          @else
           <p>no post</p>

          @endif
       </div>




     </div>
   </div>
</div>




@endsection



