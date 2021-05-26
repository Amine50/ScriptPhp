<?php
require_once('connect.php');

$login =$_GET['login'];
$password=$_GET['password'];
$sql="select * from fos_user where username='".$login."' and password='".$password."'";
$result = $conn->query($sql);
$json = new SimpleXMLElement('<xml/>');
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mydata = $json->addChild('user');
        $mydata->addChild('id',$row['id']);
        $mydata->addChild('username',$row['username']);
		$mydata->addChild('email',$row['email']);
        $mydata->addChild('sucess','sucess');
         }
}
$conn->close();
	 echo( json_encode ($json));

?>