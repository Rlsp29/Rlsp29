<?php

include("conect.php");

$id=$_POST['id'];

$query = "DELETE FROM menu WHERE id=$id";

mysqli_query($conn, $query);

header('Location: '.$uri.'lista.php');



?>