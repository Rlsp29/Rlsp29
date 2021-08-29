<?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo '<link rel="stylesheet" href="../menu.css">';
        echo '<a id="voltar" href="wellcome.php">Voltar</a>';
        echo '<a href="logout.php?logout">Logout</a><br><br><br>';
        
    }
?>
<?php
# Include script to make a database connection
include("conect.php");
$query = "SELECT * FROM reservas";
$result = $conn->query($query);
if ($result->num_rows > 0) {
# Output data for each row
  echo "<table class='menu'>
      <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Pessoas</th>
            <th>Data</th>
            <th>Espaço</th>
            <th>Refeição</th>
            <th>Apagar</th>
        </tr>
      </thead>
      ";
  while($row = $result->fetch_assoc()) { 
    echo "<tr ",">",
      "<td>", $row["id_reservas"],"</td>",
      "<td>", $row["email"],"</td>",
      "<td>", $row["pessoas"],"</td>",
      "<td>", $row["dia"],"</td>",
      "<td>", $row["espaco"],"</td>",
      "<td>", $row["refeicao"],"</td>",
      "<td>",
          "<form action='delete_reservas.php' method='post'>
              <input name='del' value='",$row["id_reservas"],"' hidden>
              <button type='submit' name='delete' value='delete'>Delete</button>
          </form>",
      "</td>",
  "</tr>";
  }
  echo  "</table>";
} else {
  echo "<br>No Records!";
}