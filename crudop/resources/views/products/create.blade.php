<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create And Store Detail</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Products</a>
    </div>
  </div>
</nav>
 
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form action="/store" method='post' enctype="multipart/form-data">
                    @if($message=Session::get('success'))
                        <div class="alert alert-success alert-block"><strong>{{$message}}</strong></div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
            
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description" id="" rows="4" class="form-control">  </textarea>
                      <span class="text-danger">
                            @error('description')
                                {{$message}}
                            @enderror
                        </span>
                    
                      </div>
                      <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control">
                        <span class="text-danger">
                            @error('image')
                                {{$message}}
                            @enderror
                        </span>
            
                      </div>
                      <button type="submit" class="btn btn-dark mt-3">Submit</button>
                  
                </form>
            </div>
            
        </div>
    </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>