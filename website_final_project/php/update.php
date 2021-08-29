<?php

include("conect.php");

$id=$_POST['id'];

$query = mysqli_query($conn,"SELECT * FROM menu WHERE id = $id");

while($result = mysqli_fetch_array($query))

{
    $categoria = $result['categoria'];
    $prato = $result['prato'];
    $descricao = $result['descricao'];
    $preco = $result['preco'];
}

?>
<html>
<head>
    <link rel="stylesheet" href="../menu.css">
</head>
<body>
    <a id="voltar" href="lista.php">Voltar</a><br><br>
    <form class="notmenu" method="post" action="updateprocess.php">

        <p>Id: <?php echo $_POST['id']; ?></p>

        Categoria: <select name="categoria">
            <option value="Sopa">Sopa</option>
            <option value="Entrada">Entrada</option>
            <option value="Peixe" >Peixe</option>
            <option value="Carne" >Carne</option>
            <option value="Sobremesa" >Sobremesa</option>
          </select><br><br>

        Prato <input type="text" name="prato" value="<?php echo $prato;?>"><br><br>

        Descrição <input type="text" name="descricao" value="<?php echo $descricao;?>"><br><br>

        Preço <input type="number" name="preco" value="<?php echo $preco;?>" step=".01"><br><br>

        <input type="hidden" name="id" value=<?php echo $_POST['id'];?> >

        <input type="submit" name="update" value="Atualizar">

    </form>

</body>

</html>