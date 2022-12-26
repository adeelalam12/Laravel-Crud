<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

 <div class="container">
    <h3 class="text-center text-primary mt-5 mb-5">Crud Record</h3>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-10">
                {{-- <input type="search" name="search" placeholder="Search" class="col-md-7">
                <button class="btn btn-primary">Search</button> --}}

            </div>

            <div class="col-sm">
            <a class="btn btn-outline-success" href="{{route('add_record')}}">Add Record</a>
            </div>
  </div>
</div>
    <div class="d-flex justify-content-center">
        <table class="table table-striped">

            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customers )
                <tr>

                    <th scope="row">{{$customers->id}}</th>
                    <th>{{$customers->name}}</th>
                    <td>{{$customers->email}}</td>
                    <td>{{$customers->gender}}</td>
                    <td>{{$customers->dob}}</td>
                    <td>{{$customers->address}}</td>
                    <td>
                    <a href="{{route('edit' ,['id'=> $customers->id])}}" class="btn btn-outline-info">Edit</a>
                        <a href="{{route('delete' ,['id'=> $customers->id])}}" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
