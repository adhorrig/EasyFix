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
                echo $lat;
                echo $lng;

            }
        }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Marker Animations</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

// The following example creates a marker in Stockholm, Sweden using a DROP
// animation. Clicking on the marker will toggle the animation between a BOUNCE
// animation and no animation.

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
  </body>
</html>
