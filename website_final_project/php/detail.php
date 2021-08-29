<?php

include("conect.php");

$id = $_POST['id'];

$query = mysqli_query($conn,"SELECT * FROM menu WHERE id =$id");

while($result = mysqli_fetch_array($query))
{

    $categoria = $result['categoria'];
    $prato = $result['prato'];
    $descricao = $result['descricao'];
    $preco = $result['preco'];

}

echo '<a id="voltar" href="lista.php">Voltar</a><br><br>';
echo "<h1>Detalhe do Prato</h1><div class='detalhe'>". "Categoria: " . $categoria . "<br>Prato: " . $prato . "<br>Descrição: " . $descricao . "<br>Preço: " . $preco ."€</div>" ;
echo '<link rel="stylesheet" href="../menu.css">';
?>