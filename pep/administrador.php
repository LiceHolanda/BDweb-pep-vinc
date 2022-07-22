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
             <a href="home.php" class="btn btn-light me-3">Voltar</a>
            <a href="index.php" class="btn btn-danger me-5">Sair</a>
          
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Pesquisar<u></u></h1>";
    ?>

<body>
       

<p>
                <a href="usuarioAdm.php"> Usuários</a>
                <br><br>
                <a href="pacienteAdm.php">Pacientes</a>
                <br><br>
                <a href="papelUsuarioAdm.php">Papéis (funções)</a>
                <br><br>   
                <a href="hospitalAdm.php">Hospitais cadastrados</a>
                <br><br>
                <a href="pedidosAdm.php">Pedidos de Parceria</a>
                <br><br>  
</p>

</body>

</html>