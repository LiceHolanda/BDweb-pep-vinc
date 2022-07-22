<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pep_vinculo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nome: " . $row["nome"].  " - Palavra-passe: " . $row["palavra_passe"]. " - Telefone: " . $row["telefone"]. "- Gênero: " . $row["genero"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>