<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.jpg">
    <title>Library</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/figure.css" rel="stylesheet">
  </head>
  <body>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Library</h1>
          </div>
        </div>
      </div>
    </header>
    <br><br><br>
        <div class="container">
          <div class="row">
            <div class="wrap-login col-md-4 col-md-offset-4">
              <?php
                include('session.php');
                echo "Login Successful...Redirecting!!!";
                header( "refresh:3;url=dashboard_stu.php" );
                ?>
              </div>
            </div>
        </div>
</html>
