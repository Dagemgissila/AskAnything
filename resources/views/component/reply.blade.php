@extends('layout.header')

@section('content')

<div class="container">
    <div class="row   align-items-center justify-content-center py-2">
     <div class="col-sm-7 ">
         <div class="container mt-3 ">


             <div class="card">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <img src="images/ask.png" class="rounded-circle" style="width:12%;height:12%;" alt="img">
                 <h2>dagem gissila</h2></div>
                 <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer
                     Some example text some example text. Jane Doe is an architect and engineer
                 </p>

               </div>
               <img class="card-img-bottom" src="images/ask3.webp" alt="Card image" style="width:40%;height:40%">
                  <div class="m-2">
                    <form action="">
                        <div class="form-group my-2">
                            <label for="" class="p-3">reply</label>
                            <textarea class="form-control " id="" rows="5" placeholder="write your reply"></textarea>
                          </div>
                          <div class="row">
                            <button type="submit" class="btn col-4 m-3">send</button>
                          </div>
                    </form>

                  </div>
             </div>
           </div>
        </div>
    </div>
</div>
@endsection
