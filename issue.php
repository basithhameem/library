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
    <?php
      include('session_staff.php');
    ?>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Library</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="dashboard_staff.php">Dashboard</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome to Staff Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Library | Dashboard <small>Manage your books here</small></h1>
          </div>
        </div>
      </div>
    </header>
    <section id="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="active">You are inside the staff dashboard of library management system</li>
          </ol>
      </div>
    </section>
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="dashboard_staff.php" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="viewbook_staff.php" class="list-group-item"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Books</a>
              <a href="addnewbook.php" class="list-group-item"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Add New Book</a>
              <a href="deletebook.php" class="list-group-item"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Delete a Book</a>
              <a href="issue.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Issue and Return</a>
              <a href="addnewstudent.php" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add a Student</a>
              <a href="viewstudent.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> View Student</a>
            </div>
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Dashboard</h3>
            </div>
            <div class="panel-body">
              <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default main-color-bg" onclick="window.location.href='view_issue.php'">View Register</button>
                </div>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default main-color-bg" onclick="window.location.href='issue_now.php'">Issue Now</button>
                </div>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default main-color-bg" onclick="window.location.href='return.php'">Return</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
  </body>
</html>
