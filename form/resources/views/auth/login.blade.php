<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" >Farming Assistant</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href=''>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href=''>About</a>
            </li>
    
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services 
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href=''>Fertilizer Distribution</a></li>
                <li><a class="dropdown-item" href=''>Seed Distribution</a></li>
                <li><a class="dropdown-item" href=''>Programs</a></li>
              </ul>
            </li>
    
          
          </ul>
          <form class="d-flex" role="search">
            <button class="btn btn-success" type="submit"><a href='' style="color:white; text-decoration: none;">Login/SignUp</a></button>
          </form>
        </div>
      </div>
    </nav>
  
  <div class="container">
  <section class="my-5">
      <div class="py=5">
          <h2 class="text-center" style="color:	#198754;">Login </h2>
      </div>
  
      <div class="w-50 m-auto">
      <form action="{{route('login-user')}}" method="post">
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
      <div class="mb-3 mt-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
      <span class="text text-danger">
        @error('email')
            {{$message}}
        @enderror
      </span>

    </div>
       
    <div class="mb-3 mt-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" placeholder="password" name="password">
      <span class="text text-danger">
        @error('password')
            {{$message}}
        @enderror
      </span>

        </div>
    
      <center><button type="submit" class="btn btn-success">Log in</button><p>Don't have an account ? <a href='registration'>SignUp</a></p></center>
       
  </form>
          
  </div>
  </div>

  
      
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
</html>