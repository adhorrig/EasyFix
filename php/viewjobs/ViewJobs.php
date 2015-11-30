<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type = "text/javascript">
            $('.nav li a').click(function (e) {
            $('.nav li').removeClass('active');
            var $parent = $(this).parent();
            if (!$parent.hasClass('active')) {
                $parent.addClass('active');
            }
            });
        </script>
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
                            <a href="../welcomepages/WelcomeTrade.php">Home</a>
                        </li>
                        <li>
                            <a href="ViewJobs.php">View job</a>
                        </li>
                        <li>
                            <a href="#">Set your availability</a>
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
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="ViewJobs.php">All</a></li>
            <li role="presentation"><a href="category.php?c=plumbing">Plumbing</a></li>
            <li role="presentation"><a href="category.php?c=painting">Painting</a></li>
            <li role="presentation"><a href="category.php?c=carpentry">Carpentry</a></li>
            <li role="presentation"><a href="category.php?c=gas">Gas</a></li>
            <li role="presentation"><a href="category.php?c=steel">Steel</a></li>
            <li role="presentation"><a href="category.php?c=gardening">Gardening</a></li>
            <li role="presentation"><a href="category.php?c=tilers">Tilers</a></li>
            <li role="presentation"><a href="category.php?c=sewage">Sewage</a></li>
            <li role="presentation"><a href="category.php?c=electrical">Electrical</a></li>
        </ul>
            </br>
              <?php
      		    require '../connect.php';
      	           if($result = $db->query("SELECT id,description,price,urgency,photo,category FROM jobs ")){
      	                if($count = $result->num_rows){
                              while($row = $result->fetch_object()){
      		  	?>
      			  <div class = "jumbotron other-color">

                  <h4> <b>Description:</b> </h4><?php echo $row->description; ?><br><br>
              	  <h4> <b>Price: </b></h4><?php echo $row->price; ?><br><br>
              		<h4> <b>Urgency: </b> </h4><?php echo $row->urgency; ?><br><br>
                  <h4> <b>Category: </b> </h4><?php echo $row->category; ?><br><br>
                  <img src = "../../images/<?php echo $row->photo; ?>" alt = "No image provided"/><br><br>
                  <div class="btn-toobar">
                      <a href='acceptjob.php?jobid=<?php echo $row->id; ?>'><button type="submit" class="btn btn-primary">Accept job</button></a>
                  </div>
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
