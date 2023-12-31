<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>Add Data</h2>
            </div>
            <div>
                <a href="{{route('companies.index')}}" class="btn btn-primary">Back</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <form action="{{route ('companies.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                          <strong>Name</strong>
                          <input type="text" name="name" class="form-control" placeholder="Name">
                          @error('name')
                              <div class="alert alert-danger">{{$message}}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                          <strong>E-mail</strong>
                          <input type="text" name="email" class="form-control" placeholder="E-mail">
                          @error('email')
                              <div class="alert alert-danger">{{$message}}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                          <strong>Address</strong>
                          <input type="text" name="address" class="form-control" placeholder="Address">
                          @error('address')
                              <div class="alert alert-danger">{{$message}}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                    </div>
                    
                    
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>