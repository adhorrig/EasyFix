<html>
    <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <!-- Latest compiled and minified JavaScript -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>Welcome</title>
        <style type="text/css">
            body{
           background-image: url(../../images/bg2.jpg);
			background-size: cover;
            }
            .other-color{
            background-color:#c0c0c0;
            }
			 #custom-bootstrap-menu.navbar-default .navbar-brand {
    color: rgba(119, 119, 119, 1);
}
#custom-bootstrap-menu.navbar-default {
    font-size: 20px;
    background-color: rgba(251, 224, 130, 1);
    background: -webkit-linear-gradient(top, rgba(248, 248, 248, 1) 0%, rgba(251, 224, 130, 1) 100%);
    background: linear-gradient(to bottom, rgba(248, 248, 248, 1) 0%, rgba(251, 224, 130, 1) 100%);
    border-width: 1px;
    border-radius: 4px;
}
#custom-bootstrap-menu.navbar-default .navbar-brand  {
	font-size: 25px;
	}

#custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
    color: rgba(119, 119, 119, 1);
    background-color: rgba(248, 248, 248, 0);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
    color: rgba(51, 51, 51, 1);
    background-color: rgba(179, 186, 184, 1);
    background: -webkit-linear-gradient(top, rgba(248, 248, 248, 0) 0%, rgba(179, 186, 184, 1) 100%);
    background: linear-gradient(to bottom, rgba(248, 248, 248, 0) 0%, rgba(179, 186, 184, 1) 100%);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
    color: rgba(85, 85, 85, 1);
    background-color: rgba(178, 184, 183, 1);
    background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(178, 184, 183, 1) 100%);
    background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(178, 184, 183, 1) 100%);
}
#custom-bootstrap-menu.navbar-default .navbar-toggle {
    border-color: #b2b8b7;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
    background-color: #b2b8b7;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
    background-color: #b2b8b7;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
    background-color: #fbe082;
}
        </style>
    </head>
    <body>
        <div class = "container">
			<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">EasyFix</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="WelcomeCustomer.php">Home</a>
                </li>
                <li><a href="../jobpost/jobpostView.php">Post a job</a>
                </li>
				<li>
                  <a href="#">Set your availability</a>
                 </li>
                <li><a href="/contact">Contact Us</a>
                </li>
            </ul>
			  <ul class="nav navbar-nav navbar-right">
			  <!-- Trigger the modal with a button -->
			  <li><a href="../profile/profile.php"><span class="glyphicon glyphicon-user"></span> Your profile</a></li>
				<li><a href="../session/destroy.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				
			</ul>
        </div>
    </div>
</div>
			
			
			
			
            <div class="jumbotron other-color">
                <form action="" method="post" name="Login_Form" class="form-signin" >
                    <br/>
                    <div class="row row-centered"  >
                        <img src="../../images/handshake.png" class="img-responsive center-block" alt="handshake">
                    </div>
                    <div class="container-fluid">
                        <div class="row row-centered"  >
                            <br/>
                            <br/>
                            <p><a href="../jobpost/jobpostView.php"><button type="button" class="btn btn-success btn-lg btn-block ">Post a job</button></a></p>
                            <p><a href="../php/SetAvailability"><button type="button" class="btn btn-success btn-lg btn-block">View available tradesmen</button></a></p>
                            <p><a href="../profile/profile.php"><button type="button" class="btn btn-success btn-lg btn-block" href = "/php/jobpost.php">My Profile</button></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
