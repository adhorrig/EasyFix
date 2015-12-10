<!DOCTYPE html >
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>PHP/MySQL & Google Maps Example</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFMMkOjcgp54Sq9YwcMxGe6hP97VLd-Js"
            type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;
            request.onreadystatechange = function () {
                if (request.readyState == 4) {
                    //request.onreadystatechange = doNothing;
                    callback(request, request.status);
                }
            };
            request.open('GET', url, true);
            request.send(null);
        }

        function loadMarkers() {
            map.markers = map.markers || []
            downloadUrl("markers.xml", function (data) {
                var xml = data.responseXML;
                markers = xml.documentElement.getElementsByTagName("marker");
                for (var i = 0; i < markers.length; i++) {
                    var point = new google.maps.LatLng(
                        parseFloat(markers[i].getAttribute("lat")),
                        parseFloat(markers[i].getAttribute("lng")));
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        title: name
                    });
                    map.markers.push(marker);
                }
            });
        }

        function initialise() {
            myLatlng = new google.maps.LatLng(54.559323, -3.321304);
            mapOptions = {
                zoom: 5,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            geocoder = new google.maps.Geocoder();
            infoWindow = new google.maps.InfoWindow;
            map = new google.maps.Map(document.getElementById('map'), mapOptions);

            loadMarkers();

        }

        google.maps.event.addDomListener(window, 'load', initialise);

        google.maps.event.addDomListener(window, 'load', initialise);
        //]]>
    </script>

</head>

<body onload="load()">
<div id="map" style="width: 500px; height: 300px"></div>
</body>

</html>
