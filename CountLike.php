<?php
require_once('connect.php');


$id=$_GET['id_magasin'];
$sql = "SELECT count(*) from aimervideo where etat ='aime'and id_magasin=".$id;
$result = $conn->query($sql);
$json = new SimpleXMLElement('<xml/>');
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mydata = $json->addChild('like');
      $mydata->addChild('nb',$row['count(*)']);
         }
} else {
    echo "0 results";
}
$conn->close();
	 echo( json_encode ($json));
?>