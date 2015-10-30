<?php
  require '../connect.php';
  session_start();
  $_SESSION['username'];
  if(isset($_GET['jobid'])){
      $id = $_GET['jobid'];

      $sql = "SELECT email FROM users as U INNER JOIN jobs as J ON U.username = J.username WHERE J.id = $id;";
      $result = $db->query($sql);

      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
              $email = $row["email"];
          }
      }
  }

  $msg = 'A tradesmen has accepted your job. The tradesmen will contact you shortly. Thank you for using EasyFix.';
  $to = $email;
  $subject = '"Job acceptd"';
  $msg = wordwrap($msg,70);
  mail($to, $subject, $msg);
?>

<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>Post a job</title>
        <style type="text/css">
            body{
            background-color: #E8E8E8;
            }
            .other-color{
            background-color:#c0c0c0;
            }
        </style>
    </head>
    <body>
        <div class = "container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">EasyFix</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                          <li class="active">
                              <a href="../welcomepages/WelcomeTrade.php">Home</a>
                          </li>
                          <li>
                              <a href="../jobpost/jobpostView.php">Post a job</a>
                          </li>
                          <li>
                              <a href="#">View available tradesmen</a>
                          </li>
                          <li>
                              <a href="../profile/profile.php">Your profile</a>
                          </li>
                          <li>
                              <a href="../session/destroy.php">Logout</a>
                          </li>
                      </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
            <div class="jumbotron other-color">
                <h3> The job poster has been notified that you are leaving shortly.</h3>
            </div>
        </div>
    </body>
</html>
