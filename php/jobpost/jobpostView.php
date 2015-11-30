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
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
            <div class="jumbotron other-color">
                <form action="jobpost.php" method="POST" name="JobPost" class="form-signin" enctype="multipart/form-data" >
                    <h3 class="form-signin-heading">Post a job!</h3>
                    <hr class="colorgraph">
                    <br>
                    <h4><b>Description of the problem</b></h4>
                    <textarea class="form-control" rows="3" id="comment" name="comment" required="" autofocus=""></textarea>
                    </br>
                    <h4><b>Price</b></h4>
                    <input type="text" class="form-control" name="price" placeholder="Price for the job" required="" autofocus="" />
                    </br>
                    <h4><b>Urgency level</b></h4>
                    <select name = "urgency" class = "form-control" required = "">
                        <option name = "High">High</option>
                        <option name = "Medium"> Medium</option>
                        <option name = "Low">Low</option>
                    </select>
                    </br>
                    <h4><b> Upload photo</b></h4>
                    <input type="file" class="form-control" name="image" placeholder="Upload a photo" required=""/>
                    </br>
                    <h4><b>Category</h4>
                    </b>
                    <select name = "category" class = "form-control"required = "">
                        <option name = "Electrical"> Electrical</option>
                        <option name = "Plumbing"> Plumbing</option>
                        <option name = "Painting"> Painting</option>
                        <option name = "Carpentry"> Carpentry</option>
                        <option name = "Gas"> Gas</option>
                        <option name = "Steel"> Steel</option>
                        <option name = "Home conversions"> Home conversions</option>
                        <option name = "Brick laying"> Brick laying</option>
                        <option name = "Gardening"> Gardening</option>
                        <option name = "Home extensions"> Home extensions</option>
                        <option name = "Tilers"> Tilers</option>
                        <option name = "Sewage"> Sewage</option>
                    </select>
                  </br>
                    <div class="btn-toolbar">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
