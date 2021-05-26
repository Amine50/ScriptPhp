<?php
require_once('connect.php');

$id_like =$_GET['id_like'];
$id_user =$_GET['id_user'];
$sql="select * from aimervideo where id_user='".$id_user."'and id_magasin=".$id_like;
$result = $conn->query($sql);
$json = new SimpleXMLElement('<xml/>');
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mydata = $json->addChild('user');
        $mydata->addChild('sucess','sucess');
         }
}
$conn->close();
	 echo( json_encode ($json));

?>