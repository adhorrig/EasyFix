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
            font-family: 'Oswald', sans-serif;
            background-image: url(../../images/bg5.png);
            background-size: cover;
            }
            .other-color{
            background-color:#c0c0c0;
            }
            .container {
            height:100%;
            background: #1D976C /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #1D976C , #93F9B9); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #1D976C , #93F9B9);
            background-size: cover;
            }			
            #custom-bootstrap-menu.navbar-default .navbar-brand {
            color: rgba(119, 119, 119, 1);
            }
            #custom-bootstrap-menu.navbar-default .navbar-brand {
            color: rgba(119, 119, 119, 1);
            }
            #custom-bootstrap-menu.navbar-default {
            font-size: 20px;
            background-color: rgba(247, 148, 32, 1);
            background: -webkit-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(247, 148, 32, 1) 100%);
            background: linear-gradient(to bottom, rgba(248, 248, 248, 1) 0%, rgba(247, 148, 32, 1) 100%);
            border-width: 1px;
            border-radius: 4px;
            }
            #custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
            color: rgba(119, 119, 119, 1);
            background-color: rgba(247, 148, 32, 1);
            background: -webkit-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(247, 148, 32, 1) 100%);
            background: linear-gradient(to bottom, rgba(248, 248, 248, 1) 0%, rgba(247, 148, 32, 1) 100%);
            }
            #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
            #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
            color: rgba(51, 51, 51, 1);
            background-color: rgba(184, 184, 184, 1);
            background: -webkit-linear-gradient(top, rgba(248, 248, 248, 0) 0%, rgba(184, 184, 184, 1) 100%);
            background: linear-gradient(to bottom, rgba(248, 248, 248, 0) 0%, rgba(184, 184, 184, 1) 100%);
            }
            #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
            #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
            #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
            color: rgba(85, 85, 85, 1);
            background-color: rgba(250, 247, 247, 1);
            background: -webkit-linear-gradient(top, rgba(231, 231, 231, 1) 0%, rgba(250, 247, 247, 1) 100%);
            background: linear-gradient(to bottom, rgba(231, 231, 231, 1) 0%, rgba(250, 247, 247, 1) 100%);
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle {
            border-color: #faf7f7;
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
            #custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
            background-color: #faf7f7;
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
            background-color: #faf7f7;
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
            #custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
            background-color: #f79420;}
            .panel {
            min-height: 430px;
            max-width:425px;
            }          
        </style>
    </head>
    <body>
               <div class = "container">
		
		<div class="page-header">
			<img src="../../images/prof.png" class="img-responsive" alt="Cinque Terre" class="img-responsive center-block" >
		</div>
		
			<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="#"></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-menubuilder">
                        <ul class="nav navbar-nav navbar-left">
                         <li class="active">
                                <a href="../welcomepages/WelcomeCustomer.php">Home</a>
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
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Trigger the modal with a button -->
                            <li class="active"><a href="../profile/profile.php"><span class="glyphicon glyphicon-user"></span> Your profile</a></li>
                            <li><a href="../session/destroy.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="jumbotron bg-success">
                <h3> The job poster has been notified that you are leaving shortly.</h3>
            </div>
        </div>
    </body>
</html>
