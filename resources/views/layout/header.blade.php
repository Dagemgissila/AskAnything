<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <title>home page</title>
</head>
<body>
   <div class="container-fluid bg-light">
    <div class="d-flex align-items-center justify-content-between p-3 mx-sm-5">
        <div class="logo">
               <h2 class="orange ask">ask anything</h2>
        </div>

        @if(session()->has('message'))

<div class="alert bg-info">
 <p>{{session('message')}}</p>
</div>
        @endif

        <div class="nav orange align-items-center justify-content-center">
            <li class="nav-item">
                <a href="" class="nav-link">Welcome  {{auth()->user()->fullname}}</a>
            </li>
            <li class="nav-item">
                <a href="/logout" class="nav-link"><i class="bi bi-box-arrow-right"></i>logout</a>
            </li>
        </div>
    </div>
   </div>

   <nav class="nav navbar-expand-lg navbar-dark bg-dark sticky-top p-3">
    <div class="container">

      <div class="d-sm-flex ">
        <button class="navbar-toggler"
        type="button"
         data-bs-toggle="collapse"
         data-bs-target="#navbarmenu"
       ><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse ms-auto sticy-top" id="navbarmenu">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a href="/home" class="nav-link"><i class="bi bi-house-door-fill"></i>home</a>
                </li>
                <li class="nav-item">
                    <a href="/askquestion" class="nav-link"><i class="bi bi-question-circle-fill"></i>Ask Question</a>
                </li>
                <li class="nav-item">
                    <a href="/users" class="nav-link"><i class="bi bi-people-fill"></i>Users</a>
                </li>

                <li class="nav-item">
                    <a href="/myprofile" class="nav-link"><i class="bi bi-person-circle"></i>My Profile</a>
                </li>
            </ul>

        </div>
        <form action="" class="my-2">
            <div class="form-group d-flex align-items-right">
                <input type="text" class="form-control me-2" name="search" value='{{request("search")}}' placeholder="search ">
                <button class="btn">search</button>
            </div>
        </form>

      </div>

    </div>

</nav>

@yield('content')

    <footer class="text-center text-white mt-5 mb-0" style="background-color: orangered;">
        <div class="text-center text-white p-3">
            © 2023 Copyright:
               dagem gissila
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
</body>
</html>
