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
            background-color: #E8E8E8;
        }
        .other-color{
            background-color: #c0c0c0;
        }
        #map{
            height:100%;
        }
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
          <div class = "jumbotron other-color" align="center">
              <h4> The location of the job is below </h4>
              <div class="btn-toobar">
                  <a href='../mail/mail.php?jobid=<?php echo $_GET['jobid']; ?>'><button type="submit" class="btn btn-primary">Let the job poster know that you are leaving.</button></a> </br>
              </div>
              <div id="map"></div>
          </div>
      </div>
  </body>
</html>
