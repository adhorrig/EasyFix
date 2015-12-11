<?php
require '../connect.php';

// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
// Select all the rows in the markers table
$query = "SELECT forename, expertise, surname, phonenumber, latitude, longitude FROM userinformation as U INNER JOIN users as US ON u.username = us.username WHERE AccountType = 'Tradesmen'";
$result = $db->query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
header("Content-type: text/xml");
// Iterate through the rows, adding XML nodes for each
while ($row = $result->fetch_assoc()) {
    // ADD TO XML DOCUMENT NODE
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("lat", $row['latitude']);
    $newnode->setAttribute("lng", $row['longitude']);
    $newnode->setAttribute("name", $row['forename']);
    $newnode->setAttribute("surname", $row['surname']);
    $newnode->setAttribute("call", "Call on the below number");
    $newnode->setAttribute("phone", $row['phonenumber']);
    $newnode->setAttribute("expertise", "Skill : '". $row['expertise'] ."'");
}
$xmlfile = $dom->saveXML();
$dom->save("markers.xml") . "Done!";
echo $xmlfile;
?>
