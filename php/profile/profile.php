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
		
		<script> 
				function myFunctiuon (){ 
					
					<?php 
							exit("You have Loged out!");
					?> 
				
				
				}
		</script> 
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
                        <li>
                            <a href="../welcomepages/WelcomeCustomer.php">Home</a>
                        </li>
                        <li>
                            <a href="../jobpost/jobpostView.php">Post a job</a>
                        </li>
                        <li>
                            <a href="#">View available tradesmen</a>
                        </li>
                        <li class="active">
                            <a href="profile.php">Your profile</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
        <div class = "jumbotron other-color" align="center">
            <h2>Profile</h2>
            <p>Tom Sin - Tradesman </p>
            <img src="../../images/liam.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
        </div>
    </body>
</html>
