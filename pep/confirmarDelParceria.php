<html>
    <head>
        <title>DesBD</title>
</head>
<body>
<a href='pedidosAdm.php'>Voltar</a>
<br><br>
<a href='logout.php'>Logout</a></br>

<?php
    //start the session
    session_start();  

if($_SESSION["estaLogado"]==true) {
  echo "<br><br>Usuário,";
  

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

$sql = "SELECT * FROM pedidos WHERE id='".$id."'";

$result = $conn->query($sql);
echo "<h2>Tem certeza que deseja excluir o seguinte pedido? </h2>";
if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc(); 
  echo "<form action='deletarPedido.php' method='post' >";
  echo "<input type='hidden' name='id' value='".$id."'>";
  echo "id: " . $row["id"]. "<br> - Nome: " . $row["nome"]. " <br> - Email: " .$row["email"]. "<br><br>";
  echo "<br><br><input type='submit' value='Excluir'>"; 
} else {
    echo "Pedido não existe";
}
$conn->close();
}else{
  echo "Usuario nao logado.";
}
?>
<br>
</body>
</html>