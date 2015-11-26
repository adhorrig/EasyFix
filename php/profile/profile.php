<?php
  require '../connect.php';
  session_start();
  $_SESSION['username'];
?>

<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>Welcome</title>
        <style type="text/css">
            body {
            background-color: #E8E8E8;
            }
            .other-color {
            background-color: #c0c0c0;
            }
        </style>
    </head>
    <body>
        <div class="container">
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
                            <a href="../welcomepages/WelcomeCustomer.php">Home</a>
                        </li>
                        <li>
                            <a href="../jobpost/jobpostView.php">Post a job</a>
                        </li>
                        <li>
                            <a href="#">View available tradesmen</a>
                        </li>
                        <li>
                            <a href="profile.php">Your profile</a>
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
        <?php
            if($result = $db->query("SELECT * FROM userinformation WHERE username = '". $_SESSION['username']. "'")){
                if($count = $result->num_rows){
                    while($row = $result->fetch_object()){
        ?>
        <div class = "jumbotron other-color" align="center">
            <img src="../../images/<?php echo $row->profilepic; ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"/>
            <h4> <b>Forename:</b> </h4><?php echo $row->forename; ?><br><br>
            <h4> <b>Surname:</b> </h4><?php echo $row->surname; ?><br><br>
            <h4> <b>Address:</b> </h4><?php echo $row->address; ?><br><br>
            <h4> <b>Age:</b> </h4><?php echo $row->age; ?><br><br>
            <h4> <b>Gender: </b> </h4><?php echo $row->gender; ?><br><br>
            <h4> <b>Username:</b> </h4><?php echo $row->username; ?><br><br>
										
		<button type="button" class="btn btn-primary" onClick="parent.location='TradeLocation.php'">Current Location</button>
			
        </div>
		
        <?php
                    }
                    $result->free();
                 }
              }
         ?>
    </body>
</html>
