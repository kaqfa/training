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
            <a class="navbar-brand" href="#">Aplikasi Perpustakaan</a>
          </div>

          <div id="navbar" class="">
            <ul class="">
              <li class="active"><a href="#">Dashboard</a></li>
              <li class="">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Buku <span class="caret"></span></a>
                <ul class="" role="menu">
                  <li><a href="#">Tambah Buku</a></li>
                  <li><a href="#">List Buku</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Penggantian Buku</a></li>
                </ul>
              </li>
              <li class="">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Anggota <span class="caret"></span></a>
                <ul class="" role="menu">
                  <li><a href="#">Tambah Anggota</a></li>
                  <li><a href="#">List Anggota</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Laporan Anggota</a></li>
                </ul>
              </li>
              <li class="">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Transaksi <span class="caret"></span></a>
                <ul class="" role="menu">
                  <li><a href="#">Peminjaman</a></li>
                  <li><a href="#">Pengembalian</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Laporan Bulanan</a></li>
                  <li><a href="#">Laporan Tahunan</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
