<?php
require_once('connect.php');

$Iduser=$_GET['id_user'];
$Idconduc=$_GET['id_conduc'];
$Idann=$_GET['id_ann'];
$etataprob=$_GET['etat_approbation'];
$nbrplaces=$_GET['nbrplaces'];



$sql = "INSERT INTO Demande ( id_user, id_conducteur, id_annonce,etat_approbation,nbr_places)
VALUES ( $Iduser,$Idconduc,$Idann,'$etataprob',$nbrplaces)";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>