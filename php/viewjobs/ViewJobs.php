<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>View Jobs</title>
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
         
            <?php 
				require 'connect.php';
				if($result = $db->query("SELECT description,price,urgency FROM jobs ")){
					if($count = $result->num_rows){
						while($row = $result->fetch_object()){
			?>
						<div class = "jumbotron other-color">
							<h4> <b>Description:</b> </h4><?php echo $row->description; ?><br><br>
							<h4> <b>Price: </b></h4><?php echo $row->price; ?><br><br>
							<h4> <b>Urgency: </b> </h4><?php echo $row->urgency; ?><br><br>
							<button type="submit" class="btn btn-primary">Accept job</button>
							
						</div>
			<?php          
					}
				$result->free();
				}
			}
			?>
         </div>
 
   </body>
</html>