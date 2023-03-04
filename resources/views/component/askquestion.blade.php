@extends('layout.header')

@section('content')

 <div class="container">



       <div >
        <form class="w-100 w-sm-50" enctype="multipart/form-data" action="/askquestion" method="POST">
            @csrf
            <div class="row  my-5 align-items-center justify-content-center">

            <div class="col-8 my-2">
              <label for="exampleFormControlTextarea1">ask question</label>
              <textarea class="form-control " name="question" id="" rows="5"></textarea>
            </div>
                <div class="col-8">
                    @error('question')
                    <p class="text-danger">{{$message}}</p>

            @enderror
                </div>

            <div class="col-8 my-2">
                <label for=""> select categorie of question</label>
                <select class="form-control" name="category">
                  <option value="technology">Technology</option>
                  <option value="Relationship">Relationship</option>
                  <option value="Education">Education</option>
                  <option value="Politics">Politics</option>
                  <option value="History">History</option>
                  <option value="Businnes">Businnes</option>
                  <option value="Religion">Religion</option>
                  <option value="technology">Music</option>
                  <option value="Music">Philosophy</option>
                  <option value="Psychology">Psychology</option>
                  <option value="Sport">Sport</option>
                  <option value="Entertainment">Entertainment</option>
                  <option value="Food">Food</option>
                  <option value="Food">Travel</option>
                  <option value="Food">Other</option>
                </select>
              </div>

                  <div class="col-8 my-2">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" name="picture" class="form-control-file " id="">
                  </div>
                <div class="col-8 my-4">
                  <button type="submit" class="btn col-8">Post</button>
                </div>
            </div>

        </div>
          </form>
       </div>

 </div>


 <div class="container">
    <div class="row   align-items-center justify-content-center py-5">

        @if($questions->count()>0)
        @foreach ($questions as $question)
     <div class="col-sm-7 ">

         <div class="container mt-3 ">




             <div class="card">
               <div class="card-body">
                  <div class="d-flex align-items-center">




                 <h2>{{auth()->user()->fullname}}</h2></div>
                 <p class="my-2"><a href="" class="btn btn-dark btn-sm">category {{$question->category}}</a></p>
                 <p class="card-text">{{ $question->question}}
                 </p>

               </div>

               <img
               class="hidden p-3 w-48 mr-6 md:block"
               src="{{$question->image? asset('questionPic/picture/'.$question->image):asset('/images/no-image.png')}}"
               alt=""
           />


                  <div class="my-3">
                       <div class="row gap-3 justify-content-center">
                        <form action="/answer/{{$question->id}}" method="POST" class="d-flex  align-items-center justify-content-center">
                            @csrf
                        <div class="col-10">

                            <textarea class="form-control m-1" name="answer" placeholder="write your answer here" name="question" id="" rows="3"></textarea>
                          </div>

                        <button class="btn mx-2" type="submit">send</button>

                    </form>
                    <div class="row mt-2 justify-content-center">

                        <a href="/{{$question->id}}/comments" class="btn btn-dark col-8">show comment</a>

                          </div>
                       </div>
                  </div>
             </div>
           </div>

        </div>
        @endforeach
        @else
      <div class="container d-flex align-items-center justify-content-center">
        <p class="lead">you post nothing</p>
      </div>

        @endif





    </div>
 </div>


@endsection
