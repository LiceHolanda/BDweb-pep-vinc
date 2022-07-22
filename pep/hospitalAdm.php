<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PEP</title>
    <style>
        body{
            background: linear-gradient(to right, , rgb(17, 54, 71));
            color: white;
            text-align: center;
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


        p {color: blue ; text-align: left; font-size:22px; margin-left:50px;}

        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PEP - ADMINISTRADORES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
             <a href="administrador.php" class="btn btn-light me-3">Voltar</a>
            <a href="index.php" class="btn btn-danger me-5">Sair</a>
          
        </div>
    </nav>
    <br>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Buscar hospitais cadastrados no PEP" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
<p style= "text-align: center; color: rgba(0,0,0,0.6); font-size: 13px; "> (Filtrar por nome, email, vinculados ou tipo)

<div class="m-5">
    <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Email</th>
                    <th scope="col">Vinculados em acompanhamento</th>
                    <th scope="col">Tipo</th>
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
    $sql = "SELECT * FROM hospital WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email  LIKE '%$data%' or usuario_id  LIKE '%$data%' or tipo_id  LIKE '%$data%' ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM hospital ORDER BY id DESC";
}
$result = $conn->query($sql);
echo "<p><br><u>Hospitais cadastrados no sistema:</u></p>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nome']."</td>"; 
    echo "<td>".$row['email']."</td>";
    //echo "<td>".$row['usuario_id']."</td>";
    echo "<td>".$row['tipo_id']."</td>";
    echo "<td>
    <a href='editar.php?id=". $row["id"]."'><img src=\"images/edit.png\"/ style='height:20px;' alt='Editar'></a> 
     <a href='confirmarDelete.php?id=". $row["id"]."'><img src=\"images/delete.png\"/ style='height:20px;' alt='Excluir'></a> <br>";
     
     echo "</tr>";
    }
}
}
        ?>
    
     <t/body>
    </table>
</div>
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
        window.location = 'hospitalAdm.php?search='+search.value;
    }
        </script>
    </html>