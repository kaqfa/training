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
      <?php include("admin-navbar.php"); ?>

      <div class="row">
        <div class="col-sm-9 blog-main">
            <div class="page-header">
               <h1>Form Buku
                  <small>Form input dan edit data buku</small>
               </h1>
            </div>
            <form class="form-horizontal" role="form">
             <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Judul Buku</label>
                <div class="col-sm-9">
                   <input type="text" class="form-control" >
                </div>
             </div>
             <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Pengarang</label>
                <div class="col-sm-9">
                   <input type="text" class="form-control" >
                </div>
             </div>
             <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">ISBN</label>
                <div class="col-sm-5">
                   <input type="text" class="form-control" >
                </div>
             </div>
             <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Penerbit</label>
                <div class="col-sm-9">
                   <input type="text" class="form-control" >
                </div>
             </div>
             <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-5">
                   <select class="form-control">
                     <option>Agama</option>
                     <option>Teknologi</option>
                     <option>Komputer</option>
                     <option>Ekonomi</option>
                     <option>Sosial Politik</option>
                   </select>
                </div>
                <label for="firstname" class="col-sm-2 control-label">Jumlah</label>
                <div class="col-sm-2">
                   <input type="text" class="form-control" >
                </div>
             </div>
             <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" class="btn btn-primary">Tambah</button>
                   <button type="submit" class="btn btn-warning">Edit</button>
                   <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
             </div>
            </form>
        </div>

        <div class="col-sm-3 blog-main">
            <?php include("admin-panel.php"); ?>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
