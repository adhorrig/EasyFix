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
         body { background: grey !important; }
         .btn-group{
         margin-left:10px;
         }
      </style>
   </head>
   <body>
      <div class = "container">
         <div class="wrapper">
            <?php 
				require 'connect.php';
				if($result = $db->query("SELECT description,price,urgency FROM jobs ")){
					if($count = $result->num_rows){
						while($row = $result->fetch_object()){
			?>
						<div class = "jumbotron">
							<h4> Description: </h4><?php echo $row->description; ?><br><br>
							<h4> Price: </h4><?php echo $row->price; ?><br><br>
							<h4> Urgency: </h4><?php echo $row->urgency; ?><br><br>
							
						</div>
			<?php          
					}
				$result->free();
				}
			}
			?>
         </div>
      </div>
   </body>
</html>
