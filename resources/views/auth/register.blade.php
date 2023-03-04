@extends('layout.firstpage')

@section('content')
<section class="bg-white text-dark  my-5">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
             <div class="w-100 w-sm-50 p-5 mb-5">
                 <h1 class="my-3 title">Ask  <span class="">Any Thing </span> </h1>
                 <form action="/register"  method="Post" class="">
                    @csrf
                    <h1 class="my-2">REGISTER</h1>
                    <div class="form-group my-2">
                        <label for="email" class="l-email">fullname</label>
                        <input type="text" name="fullname" class="form-control form-control-lg" placeholder="enter fullname">
                    </div>

                    @error('fullname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                    <div class="form-group my-2">
                        <label for="email" class="l-email">email</label>
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="enter email">
                    </div>

                    @error('email')
                      <p class="text-danger">{{$message}}</p>
                   @enderror

                    <div class="form-group my-2">
                        <label for="email" class="l-email">phone number</label>
                        <input type="tel" name="phone" class="form-control form-control-lg" placeholder="enter phone number">
                    </div>

                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                    <div class="form-group my-2">
                        <label for="email" class="l-email">city</label>
                        <input type="text" name="city" class="form-control form-control-lg" placeholder="enter city">
                    </div>

                    @error('city')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                    <div class="form-group my-2">
                        <label for="email" class="l-password">password</label>
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="enter password">
                    </div>

                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                    <div class="form-group my-2">
                        <label for="email" class="l-password">password confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="enter password">
                    </div>
                    @error('password_confirmation')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                    <div class="row mx-1">
                        <button class="btn my-3 col-12">Register</button>
                    </div>
                    <div class="d-flex">
                        <p class="lead">already  member?</p> <a  href="/login" class="mx-3 lead text-decoration-none"> login</a>
                    </div>
                </form>

             </div>

             <img class="img-fluid w-50 d-none d-md-block" src="images/ask3.webp" alt="">
        </div>
    </div>
  </section>
@endsection
