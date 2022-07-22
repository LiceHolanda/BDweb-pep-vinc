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

            .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }


    </style>
</head>
<body>
    <header>
    <h1 style="color:black; background-color:white; text-align: right; font-family: verdana; font-size: 17px;">
        <div class="center">
            <div class="logo"><img src="images/logo1.png" style='height:50px;'> PEP Vinc - PRONTUÁRIO ELETRÔNICO DE PACIENTES Vinculos </div><!--Logo--> 
            <div class="menu">

           
                <a href="index.php">Home</a>            
                <a href="home.php">Voltar</a>
                <a href="index.php">Sair</a>

        </div><!--menu-->
    </div><!--center-->
</header>

</body>
</html>

<br>
    
        <?php
    //start the session
    session_start();  

      if (isset ($_GET['msg'])) {
          echo "<span>".$_GET['msg'].'</span></br>'; 
      }
     
if($_SESSION["estaLogado"]==true) {
  echo "<br><b>Usuário,  " .$_SESSION["email"]."</b>";

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

if(isset($_GET['msg'])) {
    echo $_GET['msg'].'</br>';
}  
    }
        ?>
    
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
</div>   
<?php
        echo "<h1>Pesquisar<u></u></h1>";
    ?>

<body>
       

<p>
               
                <a href="buscarPacientes.php">Pacientes</a>
                <br><br>
                <a href="buscarProfissionais.php">Profissionais</a>
                <br><br>   
                <a href="hospitais.php">Hospitais cadastrados</a>
                <br><br>
                 
</p>

</body>

</html>   
    
    </html>