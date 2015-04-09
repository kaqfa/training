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
          <div class="jumbotron">
            <h1>Selamat Datang</h1>
            <p>Nunc ac aliquet nulla, vel mattis ipsum. Nulla vestibulum, ipsum sit amet sagittis porttitor, metus metus viverra mi, ut gravida eros eros sed enim. Sed ac elit elit. Aenean nec vulputate quam. Mauris sit amet odio volutpat est rhoncus aliquam eu at lectus. Aliquam imperdiet mollis lacus sed luctus. Mauris pulvinar eros erat, et dictum urna dapibus id. Nam id lacinia diam, eu euismod nunc. Donec et laoreet est.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Selengkapnya</a></p>
          </div>
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
