<html>
    <head>
        <title>Desenvolvimento de Banco de Dados</title>
</head>
<body>

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

$sql = "DELETE from pedidos WHERE id='".$_POST['id']."'";

if($conn->query($sql) ===TRUE) {
    header('Location: pedidosAdm.php?msg=Pedido removido com sucesso!');
  die();
} else {
  echo "<br/>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

  </body>
</html>