<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/')}}asset/css/bootstrap.min.css">
    <title>Day - 44 Class BITM php with laravel Framework</title>
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-light bg-dark text-light">
  <a class="navbar-brand text-light" href="#">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="{{route('fullName')}}">Home </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-light" href="#">About   </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-light" href="#">Service </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-light" href="{{route('show-products')}}">Manage Product  </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-light" href="{{route('show-categories')}}">Show Category </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-light" href="#">Contact </a>
      </li>

      
      
     
    </ul>
  </div>
</nav>
