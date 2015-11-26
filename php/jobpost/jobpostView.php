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
		  .jumbotron{background-color:lightgray;}
		  .bg-success{background-color:white}			
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
                                <a href="../welcomepages/WelcomeTrade.php">Your profile</a>
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
                <form action="jobpost.php" method="POST" name="JobPost" class="form-signin" >
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
                    <input type="text" class="form-control" name="urgency" placeholder="High, medium, low?" required=""/>
                    </br>
                    <div class="btn-toolbar">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
