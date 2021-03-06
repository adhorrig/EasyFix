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
                            <a href="WelcomeTrade.php">Home</a>
                        </li>
                        <li>
                            <a href="../jobpost/jobpostView.php">View jobs</a>
                        </li>
                        <li>
                            <a href="../active/setavtive.php">Set your availability</a>
                        </li>
                        <li>
                            <a href="../profile/profile.php">Your profile</a>
                        </li>
                        <li>
                            <a href="../session/destroy.php">Logout</a>
                        </li>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
            <div class="jumbotron other-color">
                <form action="" method="post" name="Login_Form" class="form-signin" >
                    <br/>
                    <div class="row row-centered"  >
                        <img src="../../images/bluehandshake.png" class="img-responsive center-block" alt="handshake">
                    </div>
                    <div class="container-fluid">
                        <div class="row row-centered"  >
                            <br/>
                            <br/>
                            <p><a href="../viewjobs/viewjobs.php"><button type="button" class="btn btn-primary btn-lg btn-block ">View jobs</button></a></p>
                            <p><a href="../active/setactive.php"><button type="button" class="btn btn-primary btn-lg btn-block">Set your availability</button></a></p>
                            <p><a href="../profile/profile.php"><button type="button" class="btn btn-primary btn-lg btn-block" href = "/php/jobpost.php">My Profile</button></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
