<?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo '<link rel="stylesheet" href="menu.css">';
        echo '<a id="voltar" href="wellcome.php">Voltar</a>';
        echo '<a href="logout.php?logout">Logout</a><br><br><br>';
        
      }
    else
    {
        header("location:sucesso.html");
    }

?>
<?php
# Include script to make a database connection
include("conect.php");
$query = "SELECT * FROM menu";
$result = $conn->query($query);
if ($result->num_rows > 0) {
# Output data for each row
  echo "<table class='menu'>
      <thead>
        <tr>
            <th>Categoria</th>
            <th>Prato</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Detalhes</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
      </thead>
      ";
  while($row = $result->fetch_assoc()) { 
    echo "<tr ",">",
      "<td>", $row["categoria"],"</td>",
      "<td>", $row["prato"],"</td>",
      "<td>", $row["descricao"],"</td>",
      "<td>", number_format($row["preco"], 2)," €</td>",
      "<td>",
          "<form action='detail.php' method='post'>
              <input name='id' value='",$row["id"],"' hidden step='any'>
              <button type='submit' name='detail' value='detail'>Detail</button>
          </form>",
      "</td>",
      "<td>",
          "<form action='update.php' method='post'>
              <input name='id' value='",$row["id"],"' hidden step='any'>
              <button type='submit' name='update' value='update'>Edit</button>
          </form>",
      "</td>",
      "<td>",
          "<form action='delete.php' method='post'>
              <input name='id' value='",$row["id"],"' hidden>
              <button type='submit' name='delete' value='delete'>Delete</button>
          </form>",
      "</td>",
  "</tr>";
  }
  echo  "</table>";
} else {
  echo "No Records!";
}
?>
<html>
<head>
    <link rel="stylesheet" href="../menu.css">
    <body>
        <button onclick="document.location='../html/criar.html'">Criar</button>
        <br>
    </body>
</head>
</html>