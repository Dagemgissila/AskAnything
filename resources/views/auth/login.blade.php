@extends('layout.firstpage')

@section('content')

<section class="bg-white text-dark  my-5  text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
             <div class="w-100 w-sm-50">
                 <h1>Ask  <span class="title">Any Thing </span> </h1>
                 <form action="/login" method="POST" class="">
                    @csrf
                    <h1>LOGIN</h1>
                    @if(session()->has('message'))
                    <div class="alert bg-danger text-white text-center">
                        <p>{{session('message')}}</p>
                    </div>
                    @else

                    @endif
                    <div class="form-group my-2">
                        <label for="email" class="l-email">email</label>
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="enter email">
                    </div>

                    @error('email')
                      <p class="text-danger">{{$message}}</p>
                    @enderror



                    <div class="form-group my-2">
                        <label for="email" class="l-password">password</label>
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="enter password">
                    </div>
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                  @enderror
                    <div class="row mx-1">
                        <button class="btn my-3 col-12">login</button>
                    </div>
                    <div class="d-flex">
                        <p class="lead">you dont have account yet?</p> <a  href="/register" class="mx-3 lead text-decoration-none"> register</a>
                    </div>
                </form>

             </div>

             <img class="img-fluid w-50 d-none d-md-block" src="images/ask3.webp" alt="">
        </div>
    </div>
  </section>

@endsection
