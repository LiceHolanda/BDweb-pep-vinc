<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
//$usuario_id = $_GET['usuario_id'];
$tipo_id = $_GET['tipo_id'];


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

$sql = "INSERT INTO hospital (nome, email, tipo_id) VALUES ('".$nome."','".$email."', '".$tipo_id."')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: pedidosAdm.php?msg= ↝ Parceria cadastrada com sucesso');
        die();
    } else {
        echo "<br/>Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
  ?>
        <a href= "cadastroParceria.php"> Voltar </a>


