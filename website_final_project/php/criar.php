<?php
    include("conect.php");
    if(isset($_SESSION['User']))
    {
        echo '<a id="voltar" href="lista.php">Voltar</a>';
    }
     $categoria = $_POST['categoria'];
     $prato = $_POST['prato'];
     $descricao = $_POST['descricao'];
     $preco = $_POST['preco'];

    $query = "INSERT INTO menu(categoria,prato, descricao,preco) VALUES ('$categoria','$prato', '$descricao','$preco')";
    if (mysqli_query($conn, $query)) {

        header('Location: '.$uri . 'lista.php');

    }
    else {
        echo "Error Inserting record: ". $conn->error;
    }
?>