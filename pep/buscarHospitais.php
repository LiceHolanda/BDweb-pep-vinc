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
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Buscar Hospitais" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
<p style= "text-align: center; color: rgba(0,0,0,0.6); font-size: 13px; "> (Filtrar por nome ou tipo)

<div class="m-5">
    <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    
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

if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM hospital WHERE id LIKE '%$data%' or nome LIKE '%$data%' ' ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM hospital ORDER BY id DESC";
}
$result = $conn->query($sql);
echo "<p><br><u>Hospitais cadastrados no PEP vinc:</u></p>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nome']."</td>";
     
     echo "</tr>";
    }
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

<br>
     
            </div>   
         
         <script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'buscarHospitais.php?search='+search.value;
    }
        </script>
    </html>