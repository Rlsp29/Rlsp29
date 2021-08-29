<?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo '<a href="logout.php?logout">Logout</a><br><br><br>';
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <title>Welcome</title>
</head>
<body>
    <div id= "container" class="welcome">
        <h1>Bem-vindo BOSS</h1>
        <button class="btn" onclick="document.location='lista_reservas.php'">Reservas</button>
        <button class="btn" onclick="document.location='lista_cliente.php'">Clientes</button>
        <button class="btn" onclick="document.location='lista.php'">Menu</button>
    </div>
    <h1></h1>
    </body>
</html>


