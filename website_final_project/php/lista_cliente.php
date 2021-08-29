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
$query = "SELECT * FROM registo";
$result = $conn->query($query);
if ($result->num_rows > 0) {
# Output data for each row
  echo "<table class='menu'>
      <thead>
        <tr>
            <th>Email</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Apagar</th>
        </tr>
      </thead>
      ";
  while($row = $result->fetch_assoc()) { 
    echo "<tr ",">",
      "<td>", $row["email"],"</td>",
      "<td>", $row["nome"],"</td>",
      "<td>", $row["apelido"],"</td>",
      "<td>",
          "<form action='delete_cliente.php' method='post'>
              <input name='del' value='",$row["email"],"' hidden>
              <button type='submit' name='delete' value='delete'>Delete</button>
          </form>",
      "</td>",
  "</tr>";
  }
  echo  "</table>";
} else {
  echo "No Records!";
}
