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
<div class="row">
<div class="col-md-10 mx-auto">
<div class="card">
  @if(session('status'))
<h6 class="alert alert-success">{{ session('status') }}</h6>
@endif


<div class="card-header">



    <div class="mb-6">
    <label for="exampleFormControlInput1"><h2>View</h2>
    </div>

    <table class="table table-dark table-striped">
  
    <tr>
      <th width="5%">Id</th>
      <th width="15%">Name</th>
      <th width="15%">Email</th>
      <th width="15%">Image</th>
       <th width="25%">Action</th>
    </tr>

@foreach ($students as $item)
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->name }}</td>
      <td>{{ $item->email }}</td>
      <td>
        <img src="{{ asset('upload/image/'.$item->image) }}" width="100px" height="70px">
      </td>
       <td><a href="{{ url('edit/'.$item->id) }}"  class="btn btn-primary">Edit</a>
        <a href="{{ url('delete/'.$item->id) }}" class="btn btn-danger">Delete</a>
       </td>
       
    </tr>
    @endforeach
    
   
</table>
<div class="mb-6 pull-right">
    <label for="exampleFormControlInput1"><a href="{{ url('/home') }}" class="btn btn-primary mb-3 pull-right">Back</a></label>
    </div>



</div>
</div>
</div>

</div>
</div>  
</body>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</html>
