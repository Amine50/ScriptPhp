<?php
require_once('connect.php');

$nom=$_GET['Nom'];
$prop=$_GET['Proprietaire'];
$tel=$_GET['Telephone'];
$adress=$_GET['Adresse'];
$desc=$_GET['Description'];
$id_user=$_GET['id_user'];
$sql = "INSERT INTO magasins(Nom, Proprietaire, Adresse, Telephone, Description,id_user,etat,prix)
VALUES ( '$nom','$prop','$adress',$tel,'$desc',$id_user,'louer',0)";
//var_dump($sql);
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>