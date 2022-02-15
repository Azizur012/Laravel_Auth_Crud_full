<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<title>CRUD</title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 mx-auto">
<div class="card" style="background-color:red;">

 @if(session('status'))
<h6 class="alert alert-success">{{ session('status') }}</h6>
@endif   



<div class="card-header">
   

<form action="{{ url('update/'.$student->id) }}" method="post" enctype="multipart/form-data">


    @csrf
    @method('PUT')

    <div class="mb-6">
    <label for="exampleFormControlInput1"><h2>Edit</h2>
    </div>




    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" value="{{$student->name}}" class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" name="email" value="{{$student->email}}" class="form-control" id="exampleFormControlInput1" placeholder="Email">
    </div>

     <div class="mb-3">
  <label for="formFile" class="form-label">Image</label>
  <input class="form-control" type="file" name="image"  id="formFile">
  <img src="{{ asset('upload/image/'.$student->image)}}" width="70px" height="70px">
</div>

    
    

    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Update</button>
    <a  href="{{ url('view') }}" class="btn btn-primary mb-3 pull-right">View</a>

   </label>
  </div>
</form>

</div>
</div>
</div>

</div>
</div>  
</body>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</html>
