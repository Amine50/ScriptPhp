<?php
require_once('connect.php');

$id =$_GET['id'];
$sql="SELECT * FROM magasins WHERE id=".$id;
$result = $conn->query($sql);
$json = new SimpleXMLElement('<xml/>');
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mydata = $json->addChild('magasins');
        $mydata->addChild('id',$row['id']);
        $mydata->addChild('Nom',$row['Nom']);
		$mydata->addChild('Proprietaire',$row['Proprietaire']);
		$mydata->addChild('Adresse',$row['Adresse']);
		$mydata->addChild('Telephone',$row['Telephone']);
		$mydata->addChild('Description',$row['Description']);
		$mydata->addChild('image',$row['image']);
            
        
         }
} else {
    echo "not found";
}
$conn->close();
	 echo( json_encode ($json));

?>