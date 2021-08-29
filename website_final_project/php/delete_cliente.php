<?php
include("conect.php");
$i=$_POST['del'];
$query = "DELETE FROM registo WHERE email = $i";
mysqli_query($conn, $query);
header('Location: lista_cliente.php');
?>