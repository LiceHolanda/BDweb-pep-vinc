<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
//$usuario_id = $_POST['usuario_id'];
$tipo_id = $_POST['tipo_id'];


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

$sql = "INSERT INTO pedidos (nome, email, tipo_id) VALUES ('".$nome."','".$email."','".$tipo_id."')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: parceria.php?msg= <b>↝ Solicitação enviada com sucesso.</b>');
        die();
    } else {
        echo "<br/>Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
  ?>
        <a href= "index.php"> Voltar </a>