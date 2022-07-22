<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = sha1($_POST['senha']);
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];

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

$sql = "INSERT INTO usuario (nome, email, telefone, senha, sexo, data_nascimento) VALUES ('".$nome."','".$email."','".$telefone."','".$senha."','".$sexo."','".$data_nascimento."')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php?msg= ↝ Usuario cadastrado com sucesso');
        die();
    } else {
        echo "<br/>Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
  ?>
        <a href= "index.php"> Voltar </a>




  