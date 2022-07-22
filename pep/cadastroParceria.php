<html>
    <head>
        <title>Desenvolvimento de Banco de Dados para Web</title>
</head>
<body>

<a href='pedidosAdm.php'>Voltar</a>
<h1 style="color:black; background-color:lightcyan; text-align: right; font-family: verdana; font-size: 17px;"> ↝ <a href="logout.php">Sair</a></a></h1>

<?php
    //start the session
    session_start();  

if($_SESSION["estaLogado"]==true) {
  echo "Usuário ";
 

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
echo "<h2>Deseja cadastrar o seguinte pedido? </h2>";
if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc(); 
    echo "<form action='atualizarParceria.php'>";
    echo "<input type='hidden' name='id' value='".$id."'>";
    echo "Nome <input type='input' name='nome' value='". $row["nome"]."'></br>";
    echo "E-mail <input type='input' name='email' value='". $row["email"]."'></br>";
    //echo "Usuário <input type='input' name='usuario_id' value='". $row["usuario_id"]."'></br>";
    echo "Tipo <input type='input' name='tipo_id' value='". $row["tipo_id"]."'></br>";

    echo "<br><br><input type='submit' value='Cadastrar nova parceria'>"; 

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