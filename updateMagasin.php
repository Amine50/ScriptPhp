<?php
require_once('connect.php');

$id=$_GET['id'];
$nom=$_GET['Nom'];
$adresse=$_GET['Adresse'];
$tel=$_GET['Telephone'];
$desc=$_GET['Description'];
$sql = " update magasins set  Nom='".$nom."',Adresse='".$adresse."',Telephone='".$tel."',Description='".$desc."' where id=".$id;

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>