<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Pemrograman Internet 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    {{ Asset::container('bootstrapper')->styles(); }}
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    {{ Asset::container('bootstrapper')->scripts(); }} 
</head>
<body>
<div class="navbar navbar-inverse">
     <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand">Booststrap</a>
		  <div class="btn-group pull-right">
              <a class="btn btn-success" href="{{ URL::to('logout') }}"><i class="icon-user"></i> Irvan Abdurrahman</a>
          </div>		  
          </div>
          </div>
    </div>
    </div>
 
    <div class="container">
          <div class="row">
          @yield('content')
          </div>
          @yield('pagination')
    </div><!--/container-->
 
    <div class="container">
        <footer>
            
        </footer>
      </div>
</body>
</html>