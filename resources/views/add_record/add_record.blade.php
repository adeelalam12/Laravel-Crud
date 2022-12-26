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
      <form action="{{$url}}" method ="POST">
            @csrf
            <div class="conatiner mt-5 card p-3 bh-white" style="width:400px;">
                <h3 class="text-center text-primary mb-5">{{$title}}</h3>
                    <div class="d-flex justify-content-center mb-2">
                        <div class="form-group col-md-12 ">
                            <input type="text" name="name" class="form-control @error('name')
                                border border-danger
                            @enderror" id="inputEmail4" placeholder="Name" value="{{$customer->name ?? null}}">
                            @error('name')
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
                            @enderror" id="inputEmail4" placeholder="Email" name="email" value="{{$customer->email}}">
                            @error('email')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>

                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mb-3 ">
                        <div class="form-group col-md-12 required">
                            <label for="" class="mr-3">Gender: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M" {{$customer->gender == "M" ? "checked": ""}} >
                                <label class="form-check-label ml-2" for="inlineRadio3">Male</label>

                            </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="F"
                                {{$customer->gender == "F" ? "checked": ""}}
                                 >
                                <label class="form-check-label ml-2" for="inlineRadio3">Female</label>

                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="O"
                                {{$customer->gender == "O" ? "checked": ""}}
                                  >
                                <label class="form-check-label ml-2" for="inlineRadio3">Other</label>

                                 </div>

                        </div>

                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <div class="form-group col-md-12 required">
                            <input type="date" class="form-control" name="dob" value="{{$customer->dob}}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <div class="form-group col-md-12 required">
                            <input type="text" class="form-control" placeholder="Address" name="address" value="{{$customer->address}}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    </div>

            </div>

        </form>
   </div>
  </body>
</html>
