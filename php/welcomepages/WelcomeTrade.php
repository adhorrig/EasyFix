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
                                <a href="../html/WelcomeTrade.html">Home</a>
                            </li>
                            <li>
                                <a href="../php/ViewJobs.php">View job</a>
                            </li>
                            <li>
                                <a href="#">Set your availability</a>
                            </li>
                            <li>
                                <a href="#">Your profile</a>
                            </li>
							<li>
                                <a href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
            <div class="jumbotron other-color">
                <form action="" method="post" name="Login_Form" class="form-signin" >
                    <br/>
                    <div class="row row-centered"  >
                        <img src="../images/bluehandshake.png" class="img-responsive center-block" alt="handshake">
                    </div>
                    <div class="container-fluid">
                        <div class="row row-centered"  >
                            <br/>
                            <br/>
                            <p><a href="../php/ViewJobs.php"><button type="button" class="btn btn-primary btn-lg btn-block ">View Jobs</button></a></p>
                            <p><a href="../php/SetAvailability"><button type="button" class="btn btn-primary btn-lg btn-block">Set availability</button></a></p>
                            <p><a href="../php/MyProfile"><button type="button" class="btn btn-primary btn-lg btn-block" href = "/php/jobpost.php">My Profile</button></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>