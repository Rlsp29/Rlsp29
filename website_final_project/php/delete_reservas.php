<?php
include("conect.php");
$i=$_POST['del'];
$query = "DELETE FROM reservas WHERE id_reservas = $i";
mysqli_query($conn, $query);
header('Location: lista_reservas.php');
?>
