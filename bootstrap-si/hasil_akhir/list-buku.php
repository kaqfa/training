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
               <h1>List Buku
                  <small>Daftar semua koleksi buku yang tersimpan</small>
               </h1>
            </div>

            <button type="submit" class="btn btn-primary pull-right">Tambah Buku</button><br /><br />
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mengarang Indah</td>
                        <td>Indah Poncowati</td>
                        <td>Aneka Ilmu</td>
                        <td>Tulisan</td>
                        <td>90 Eks</td>
                        <td> <a href="#" class="label label-warning">Edit</a> |
                      <a href="#" class="label label-danger">Hapus</a> </td>
                    </tr>
                    <tr>
                        <td>Belajar Komputer</td>
                        <td>Nurudin Nasution</td>
                        <td>Gramedia</td>
                        <td>Komputer</td>
                        <td>10 Eks</td>
                        <td> <a href="#" class="label label-warning">Edit</a> |
                            <a href="#" class="label label-danger">Hapus</a> </td>
                    </tr>
                    <tr>
                        <td>Pemrograman Dasar</td>
                        <td>Rinaldi Munir</td>
                        <td>Informatika</td>
                        <td>Pemrograman</td>
                        <td>20 Eks</td>
                        <td> <a href="#" class="label label-warning">Edit</a> |
                        <a href="#" class="label label-danger">Hapus</a> </td>
                    </tr>
                    <tr>
                        <td>Bootstrap Untuk Pemula</td>
                        <td>Muhammad Rizka</td>
                        <td>Gramedia</td>
                        <td>Pemrograman</td>
                        <td>25 Eks</td>
                        <td> <a href="#" class="label label-warning">Edit</a> |
                        <a href="#" class="label label-danger">Hapus</a> </td>
                    </tr>
                    <tr>
                        <td>Provisioning Ansible</td>
                        <td>Dan Greg</td>
                        <td>O'Reilly</td>
                        <td>Jaringan</td>
                        <td>2 Eks</td>
                        <td> <a href="#" class="label label-warning">Edit</a> |
                        <a href="#" class="label label-danger">Hapus</a> </td>
                    </tr>
                </tbody>
            </table>
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
