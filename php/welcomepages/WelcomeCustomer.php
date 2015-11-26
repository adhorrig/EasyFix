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
		
		   <?php
		    require '../connect.php';
	           if($result = $db->query("SELECT forename,surname,phonenumber,urgency FROM userinformation ")){
	                if($count = $result->num_rows){
                        while($row = $result->fetch_object()){
		  	?>
		
    </head>
    <body>
           <div class="container">
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
			 <li class="active"><a href="../profile/profile.php"><span class="glyphicon glyphicon-user"></span> Your profile</a></li>
				<li><a href="../session/destroy.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				
			</ul>
        </div>
    </div>
</div>
<div class="row">
			<div class="col-md-5">
<div class="panel panel">
  <div class="panel-heading text-center"> Tomas Sinauskas</div>
  <div class="panel-body ">
    <img class="img-responsive center-block" src="../../images/liam.jpg"  >
	 <ul class="list-group">
        <li class="row list-group-item">
          <a class="col-sm-2" ng-href="#"><?php echo $row->Forename: ?></a> 
        </li>
        <li class="row list-group-item">
          <a class="col-md-3" ng-href="#"><?php echo $row->Age: ?></a> 
        </li>
		<li class="row list-group-item">
          <a class="col-md-3" ng-href="#"><?php echo $row->Experience:?> </a> 
        </li>
		<li class="row list-group-item">
          <a class="col-md-3" ng-href="#"><?php echo $row->Qualification: ?></a> 
        </li>
  </div>
</div>
            </div>
			
			
			
			
			 <form action="" method="post" name="Login_Form" class="form-signin" >
                    <div class="container-fluid">
                        <div class="col-md-4 text-right ">
                            <br/>
                            <br/>
                            <p><a href="../jobpost/jobpostView.php">
							<button type="button" class="btn btn-success btn-lg btn-block"> Post a job <span class="glyphicon glyphicon-wrench"></span></button></a>
	
                            <p><a href="../php/SetAvailability"><button type="button" class="btn btn-success btn-lg btn-block">View available tradesmen</button></a></p>
                            <p><a href="../profile/profile.php"><button type="button" class="btn btn-success btn-lg btn-block" href = "/php/jobpost.php">Edit your Profile</button></a></p>
                        </div>
                    </div>
                </form>
            </div>
			</div>
               
            </div>
       
    </body>
</html>
