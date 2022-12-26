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

   <div class="d-flex justify-content-center ">
      <form action="{{route('Reg')}}" method ="POST">
            @csrf
            <div class="conatiner mt-5 card p-3 bh-white" style="width:400px;">
                <h3 class="text-center text-primary mb-5">Registration</h3>
                    <div class="d-flex justify-content-center mb-2">
                        <div class="form-group col-md-12 ">
                            <input type="text" name="name" class="form-control @error('name')
                                border border-danger
                            @enderror" id="inputEmail4" placeholder="Name" value="{{old('name')}}">
                            @error('name')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>

                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-2">
                        <div class="form-group col-md-12 ">
                            <input type="text" name="username" class="form-control @error('username')
                                border border-danger
                            @enderror" id="inputEmail4" placeholder="Username" value="{{old('username')}}">
                            @error('username')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>

                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-2">
                        <div class="form-group col-md-12 required">
                            <input type="email" class="form-control @error('email')
                                border border-danger
                            @enderror" id="inputEmail4" placeholder="Email" name="email" value="{{old('email')}}">
                            @error('email')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>

                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                        <div class="form-group col-md-12 required">
                            <input type="password" class="form-control @error('password')
                                border border-danger
                            @enderror" id="inputEmail4" placeholder="Password" name="password" value="">
                            @error('password')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>

                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <div class="form-group col-md-12 required">
                            <input type="password" class="form-control" id="inputEmail4" placeholder="Confirm Password" name="password_confirmation" value="">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
            </div>

        </form>
   </div>
  </body>
</html>
