<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>crud index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>CRUD Exampls</h2>

            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route('companies.create')}}" class="btn btn-success">Create</a>

            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                <p>{{$message}}</p>
            </div>
            @endif
            <table class="table table-bordered mt-2">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Address</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->id}}</td>
                        <td>{{ $company->name}}</td>
                        <td>{{ $company->email}}</td>
                        <td>{{ $company->address}}</td>
                        <td>
                            <form action="{{route('companies.destroy',$company->id)}}" method="POST">
                                <a href="{{route("companies.edit",$company->id)}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach


            </table>
            {!!$companies->links('pagination::bootstrap-5')!!}
        </div>


    </div>
</body>
</html>