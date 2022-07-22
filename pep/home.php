<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Projeto </title> 
    <style>
        body{

          
        }
        .table-bg{
                background: rgba(0,0,0,0.6);
                border-radius: 15px 15px 0 0;
            }
    </style>
</head>
<body>
    <header>
    <h1 style="color:black; background-color:white; text-align: right; font-family: verdana; font-size: 17px;">
        <div class="center">
            <div class="logo"><img src="images/logo.png" style='height:50px;'> PEP Vinc - PRONTUÁRIO ELETRÔNICO DE PACIENTES Vinculos </div><!--Logo--> 
            <div class="menu">

           
                <a href="index.php">Início</a>
                <a href="administrador.php">Configurações</a>
                <a href="pesquisa.php">Pesquisar</a>
                <a href="paciente.php">+Paciente</a>
                <a href="index.php">Sair</a>

        </div><!--menu-->
    </div><!--center-->
</header>

</body>
</html>

<div class="m-5">
    <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome do Paciente</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Vínculo</th>
                    <th scope="col">Excluir</th>
                    <th scope="col"> </th>
                 </tr>
            </thead>
        <tbody>
        <?php
    //start the session
    session_start();  

      if (isset ($_GET['msg'])) {
          echo "<span>".$_GET['msg'].'</span></br>'; 
      }
     
if($_SESSION["estaLogado"]==true) {
  echo "<br><br><b>Seja bem vindo(@),  " .$_SESSION["email"]."</b>";

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


$sql = "SELECT p.id as pid, p.nome as pnome, p.hospital_id as ph , e.situacao, v.grauParentesco_id as gp 
FROM paciente as p 
LEFT JOIN evolucao as e ON p.id = e.paciente_id 
INNER JOIN vinculo as v ON p.id = v.paciente_id";

$result = $conn->query($sql);
echo "<p><br><u>Você possui os seguintes pacientes cadastrados:</u></p>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['pid']."</td>";
    echo "<td>".$row['pnome']."</td>";
    echo "<td>".$row['ph']."</td>";
    echo "<td>".$row['situacao']."</td>";  
    echo "<td>".$row['gp']."</td>";  
    echo "<td>

    <a href='confirmarDelete.php?id=". $row["pid"]."'><img src=\"images/delete.png\"/ style='height:20px;' alt='Excluir'></a> <br>";
     
     echo "</tr>";
    }
} else {                                    
  echo "0 results";
}
$conn->close();

} else {
  echo "Usuário nao logado.";
}
        ?>
        </body>
     <t/body>
    </table>
</div>



<style>
body{
margin: 0;
padding:0;
box-sizing: border-box;
font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.center{
    display: flex;
    flex-wrap: wrap;
    max-width: 1280px;
    margin:0 auto;
    padding:0 2%;
}

header{
    padding: 20px 0;
}

.logo{
    width: 50%;
}

.menu{
    padding-top:30px;
    width:50%; 
    text-align: right;
}

.menu a{
    color: black;
    text-decoration: none;
    font-weight: bold; 
    margin-right: 15px;
}
        
    </style>
</head>
<br></body>


<p style="text-align: left; font-family: verdana; "> ACOMPANHAMENTO </p>  


<h1 style="color:WHITE; background-color:blue; text-align: center; font-family: verdana; font-size: 25px;">EVOLUÇÃO MÉDICA  </a></h1>


</body>

</html>

</head>


<style>
        body{

          
            background-image: url('images/home.jpg');
            background-repeat: no-repeat;
    

            font-family: Arial, Helvetica, sans-serif;

            
          }

h1 {font-family: verdana;text-align: center; font-size: 130%;}
p {color: black; text-align: left; font-size:18px;}
p.main { text-indent: 50px; text-align: justify; white-space: pre;
}

 
</style>
<body>
  


<p style="letter-spacing: 50px;text-align: center;font-size:22px;"><b><br>PEP</b>
<p style="text-align: center;font-family: verdana;font-size:15px;word-spacing: 20px;"><i> PRONTUÁRIO ELETRÔNICO do PACIENTE </i></p>


<p style="text-align: left;margin-left:20px;"> <b>Número do atendimento:</b> 012390</p>
<p style="text-align: left;margin-left:20px;"> <b>Data do atendimento:</b> 21/07/2022 </p>
<p style="text-align: left;margin-left:20px;"> <b>Pedidos de exames:</b> Solicito Coagulograma + ECG </p>
<p style="text-align: left;margin-left:20px;"> <b>Dieta</b>  </p>
<p style="text-align: left;margin-left:20px;"> <b>Atestado disponível</b></p>
<p style="text-align: left;margin-left:20px;"> <b>Prestador solicitante </b>Dr Guilherme </p>
<p style="text-align: left;margin-left:20px;"> <b>Especialidade Requisitada </b>Ortopedia/Traumatologia</p>

<h1>___________</h1>


<p class = "main" > 
   </p>
   
<p style="text-align: center;"><b>Enviar informações:</b> 

  

<a href='informacoes.php?id=". $row["id"]."'><img src="images/informacoes.png" style='height:40px;' ></a></p> 

<br><br><br>




</body>


         <span>
    <?php


if(isset($_GET['msg'])) {
    echo $_GET['msg'].'</br>';
}
    ?>
         </span>

     </html> 
     