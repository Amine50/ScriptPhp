<?php
require_once('connect.php');

$Iduser=$_GET['id_user'];
$Idmagasin=$_GET['id_magasin'];
$etat=$_GET['etat'];
$sql = "INSERT INTO aimervideo ( id_user, id_magasin ,etat)
VALUES ($Iduser,$Idmagasin,$etat)";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>