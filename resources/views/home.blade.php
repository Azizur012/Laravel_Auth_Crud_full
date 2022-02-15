@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  
<title>Insert</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-8 mx-auto">
<div class="card" style="background-color:red;">


@if(session('status'))
<h6 class="alert alert-success">{{ session('status') }}</h6>
@endif

<div class="card-header">
    <a  href="{{ url('view') }}" class="btn btn-primary mb-3 pull-right">View</a>

<form action="{{ url('insert') }}" method="post" enctype="multipart/form-data">


    @csrf

    <div class="mb-6">
    <label for="exampleFormControlInput1"><h2>Register</h2>
    </div>




    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
    </div>

    
    <div class="mb-3">
  <label for="formFile" class="form-label">Image</label>
  <input class="form-control" type="file" name="image" id="formFile">

    

    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Insert</button>

   </label>
  </div>
</form>

</div>
</div>
</div>

</div>
</div>  
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"  ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</html>

@endsection
