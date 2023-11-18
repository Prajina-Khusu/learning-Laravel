<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW DETAILS</title>
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
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div>
                <p>Name: <b>{{$product->name}}</b></p>
                <p>Description: <b>{{$product->description}}</b></p>
                <img src="/products/{{$product->image}}" width="100%">
            </div>
        </div>
    </div>
 </div>

 </body>
</html>