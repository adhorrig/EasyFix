<?php
    require '../connect.php';
    session_start();
    $_SESSION['username'];
    if(isset($_GET['jobid'])){
        $id = $_GET['jobid'];

        $sql = "SELECT latitude, longitude FROM userinformation as U INNER JOIN jobs as J ON U.username = J.username WHERE J.id = $id;";
        $result = $db->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $lat = $row["latitude"];
                $lng = $row["longitude"];
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Marker Animations</title>
      <script src="../../js/jquery-1.11.3.min.js"></script>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
		  
		  .jumbotron{background-color:lightgray;}
		  .bg-success{background-color:white}

        </style>
    <script>
        var marker;

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: {lat: parseFloat('<?php echo $lat;?>'), lng: parseFloat('<?php echo $lng;?>')}
            });

            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: {lat: parseFloat('<?php echo $lat;?>'), lng: parseFloat('<?php echo $lng;?>')}
            });
                marker.addListener('click', toggleBounce);
        }

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFMMkOjcgp54Sq9YwcMxGe6hP97VLd-Js&signed_in=true&callback=initMap"></script>

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
                          <li class="active">
                              <a href="../welcomepages/WelcomeTrade.php">Home</a>
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
          <div class = "jumbotron bg-success" align="center">
              <h4> The location of the job is below </h4>
              <div class="btn-toobar">
                  <a href='../mail/mail.php?jobid=<?php echo $_GET['jobid']; ?>'><button type="submit" class="btn btn-primary">Let the job poster know that you are leaving.</button></a> </br>
              </div>
              <div id="map"></div>
          </div>
      </div>
  </body>
</html>
