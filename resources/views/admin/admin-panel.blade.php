<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">MegaAdmin2000</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/">На головну</a></li>
      <li class="active"><a href="#">Додати продукт</a></li>
      <li><a href="#">Редагувати продукти</a></li>
      
    </ul>
  </div>
</nav>
        <div class="container">
            <div class="row">
           
                @yield('content')
        </div>
    </body>
</html>