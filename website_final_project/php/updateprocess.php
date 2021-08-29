
<?php

include("conect.php");

$id = $_POST['id'];
$categoria = $_POST['categoria'];
$prato = $_POST['prato'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];      

mysqli_query($conn, "UPDATE menu SET categoria='$categoria', prato='$prato', descricao='$descricao', preco='$preco' WHERE id=$id");

header("Location: lista.php");

?>