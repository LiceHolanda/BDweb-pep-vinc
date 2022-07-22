<?php
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$data_nascimento = $_POST['data_nascimento'];
$hospital_id = $_POST['hospital_id'];


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

$sql = "INSERT INTO paciente (nome, genero, data_nascimento, hospital_id) VALUES ('".$nome."','".$genero."','".$data_nascimento."', '".$hospital_id."')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: paciente.php?msg= <b>↝ Paciente adicionado com sucesso</b>');
        die();
    } else {
        echo "<br/>Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
  ?>
        <a href= "home.php"> Voltar </a>



