<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD VIEW</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand " href="/">Products</a>
    </div>
  </div>
</nav>
<div class="container">
    <div class="text-right">
        <a href="/create" class="btn btn-success mt-2">New Product</a>
    </div>
 </div>

 <table class="table table-hover  " style="width:70%;margin-left:100px; ">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
 </thead>
 
 <tbody>
 @foreach($products as $product)
 <tr>
    <td>{{$loop->index+1}}</td>
    <td><a href="products/{{$product->id}}/show" style="color:black;">{{$product->name}}</a></td>
    <td><img src="products/{{$product->image}}" alt="" width="30px" height="30px"></td>
    <td><a href="products/{{$product->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
    <a href="products/{{$product->id}}/destroy" class="btn btn-danger btn-sm">Delete</a></td>
 </tr>
 @endforeach


</tbody>
</table>
<div style="margin-left:100px;">
    {{$products->links()}}
</div>

 


</body>
</html>