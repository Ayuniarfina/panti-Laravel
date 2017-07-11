<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
</head>
<body>
<nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Panti Kita</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="panti-list"><h4>Panti</h4></a></li>
        <li><a href="donasi-list"><h4>Donasi</h4></a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input class="form-control" placeholder="Search" type="text">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register"><h4>Daftar</h4></a></li>
      </ul>
    </div>
</nav>
<div class="container-fluid">
    @yield('main')
</div>

<footer>
        <div class="container-fluid">
          <div class="row text-primary text-center">
            
            <a href="dashboard">footer dude</a>
          </div>
        </div>

      </footer>

      </body>
</html>