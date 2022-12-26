<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <div class="header">
        <div class="nav-links">
            <nav>
            <ul>
                <li><a href="{{route('show_record')}}">Add Record</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
            </ul>
            </nav>
        </div>
        <div class="nav-icon">
            <a href="">{{auth()->user()->name}}</a>
            <a href="{{route('logout')}}">Logout</a>
        </div>

    </div>
  </body>
</html>
