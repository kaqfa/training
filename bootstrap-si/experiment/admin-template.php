<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Halaman Admin</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 20px;
      }

      .navbar {
        margin-bottom: 20px;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Aplikasi Perpustakaan</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Dashboard</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Buku <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Tambah Buku</a></li>
                  <li><a href="#">List Buku</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Penggantian Buku</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Anggota <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Tambah Anggota</a></li>
                  <li><a href="#">List Anggota</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Laporan Anggota</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Transaksi <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Peminjaman</a></li>
                  <li><a href="#">Pengembalian</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Laporan Bulanan</a></li>
                  <li><a href="#">Laporan Tahunan</a></li>
                </ul>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  Fahri Firdausillah <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Ganti Password</a></li>
                  <li><a href="#">Profil</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><span class="glyphicon glyphicon-logout" aria-hidden="true"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="row">
        <div class="col-sm-9 blog-main">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales sapien vitae viverra eleifend. Fusce nec leo ac arcu facilisis commodo non nec turpis. Etiam id elementum libero. Donec suscipit nibh nec quam lacinia, sit amet tempor justo placerat. Donec nec nibh nulla. Vestibulum id metus ut velit suscipit ornare. Vivamus consectetur sem laoreet sollicitudin gravida. Aliquam auctor nisl fringilla vestibulum porttitor. Nunc fermentum quam nulla, ut blandit metus eleifend at.

          Vivamus tristique consectetur nisi sed elementum. Sed non neque vitae mauris ultricies sollicitudin ac eget orci. Cras ultrices odio sapien, nec tincidunt orci volutpat quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique sodales lacus, nec pulvinar magna sollicitudin in. Duis rhoncus efficitur turpis non mattis. Quisque ipsum lorem, facilisis sit amet blandit nec, vestibulum non elit. Aenean vel semper erat. Praesent tempor dui vitae nisi pretium, eu porta elit auctor. Maecenas at ligula at ante sodales pellentesque. Sed dolor eros, fermentum sed purus eu, luctus volutpat ligula. Morbi eget ipsum et felis convallis iaculis. Proin faucibus massa vitae sapien viverra ultricies.

          Nunc ac aliquet nulla, vel mattis ipsum. Nulla vestibulum, ipsum sit amet sagittis porttitor, metus metus viverra mi, ut gravida eros eros sed enim. Sed ac elit elit. Aenean nec vulputate quam. Mauris sit amet odio volutpat est rhoncus aliquam eu at lectus. Aliquam imperdiet mollis lacus sed luctus. Mauris pulvinar eros erat, et dictum urna dapibus id. Nam id lacinia diam, eu euismod nunc. Donec et laoreet est.

          Etiam pretium molestie fringilla. Integer blandit orci felis, in faucibus ligula bibendum non. Etiam semper velit a laoreet venenatis. Nullam at nibh ullamcorper, efficitur purus a, venenatis nisi. Donec eget orci odio. Integer pretium nibh eget turpis feugiat egestas at sit amet magna. Sed malesuada aliquet malesuada. Phasellus a nunc elementum, lacinia dolor ac, ultricies tortor. Vivamus lacinia dui lectus, vitae gravida erat commodo a. Pellentesque semper a elit vitae posuere.
        </div>

        <div class="col-sm-3 blog-main">
            <div class="panel panel-info">
              <div class="panel-heading">
                <a href="#collapseOne">
                  <h4 class="panel-title"> Menu Buku </h4>
                </a>
              </div>
              <div id="collapseOne" class="">
                 <div class="panel-body">
                    <ul class="list-group">
                      <li class="list-group-item"><a href="#">Tambah Buku</a></li>
                      <li class="list-group-item"><a href="#">List Buku</a></li>
                      <li class="list-group-item"><a href="#">Penggantian Buku</a></li>
                    </ul>
                 </div>
              </div>
            </div>

            <div class="panel panel-info">
              <div class="panel-heading">
                <a href="#collapseOne">
                  <h4 class="panel-title"> Menu Anggota </h4>
                </a>
              </div>
              <div id="collapseOne" class="">
                 <div class="panel-body">
                    <ul class="list-group">
                      <li class="list-group-item"><a href="#">Tambah Buku</a></li>
                      <li class="list-group-item"><a href="#">List Buku</a></li>
                      <li class="list-group-item"><a href="#">Penggantian Buku</a></li>
                    </ul>
                 </div>
              </div>
            </div>

            <div class="panel panel-info">
              <div class="panel-heading">
                <a href="#collapseOne">
                  <h4 class="panel-title"> Menu Transaksi </h4>
                </a>
              </div>
              <div id="collapseOne" class="">
                 <div class="panel-body">
                    <ul class="list-group">
                      <li class="list-group-item"><a href="#">Tambah Buku</a></li>
                      <li class="list-group-item"><a href="#">List Buku</a></li>
                      <li class="list-group-item"><a href="#">Penggantian Buku</a></li>
                    </ul>
                 </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
