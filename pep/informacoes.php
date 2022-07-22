<html>
    <head>
        <title>DesBD</title>
</head>
<body>
<a href='home.php'>Voltar</a>

<?php
    //start the session
    session_start();  

if($_SESSION["estaLogado"]==true) {
  echo "<h1>Usuário " .$_SESSION["email"]."</h1>";
  echo "<a href='logout.php'>Logout</a></br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pep_vinculo";

$id = $_GET["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM informacao WHERE id='".$id."'";

$result = $conn->query($sql);
echo "<h2>Deseja fornecer informações ao seguinte usuário? </h2>";
if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc(); 
  echo "<form action='deletar.php' method='post' >";
  echo "<input type='hidden' name='id' value='".$id."'>";
  echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " email " .$row["email"]. " telefone " . $row["telefone"]. " senha " . $row["senha"]. " sexo " . $row["sexo"]. " data de nascimento " . $row["data_nascimento"]. "<a href='confirmarDelete.php?id=". $row["id"]."'><img src=\"images/delete.png\"/ style='height:20px;' alt='Excluir'></a> <br>";
  echo "<input type='submit' value='Excluir'>"; 
} else {
    echo "Usuário não existe";
}
$conn->close();
}else{
  echo "Usuario nao logado.";
}
?>
<br>
</body>
</html>