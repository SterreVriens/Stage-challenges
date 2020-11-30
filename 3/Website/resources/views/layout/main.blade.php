<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="@yield('pageCss')">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <header>
        <nav class=" container navbar navbar-dark navbar-expand-sm pt-4">
            <a class="navbar-brand" href="{{route('index')}}">
              <img src="{{asset('img/logo.png') }}" width="110" height="45" alt="logo">
            </a>
            <div class="collapse navbar-collapse " id="navbar-list-5">
              <ul class="navbar-nav ml-auto ">
              <li><a href="" class="text-dark p-4">Opdracht 1</a></li>
                  <li><a href="" class="text-dark p-4">Opdracht 2</a></li>
                  <li><a href="" class="text-dark p-4">Opdracht 4</a></li>
                  <li><a href="" class="text-dark p-4">Opdracht 5</a></li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
             @yield('content');
    </main>
</body>
</html>