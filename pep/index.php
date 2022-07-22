<html>
<head>
    <title>Projeto </title> 
</head>
<body>
    <header>
    <h1 style="color:black; background-color:white; font-family: verdana; font-size: 17px;">
        <div class="center"> 
            <div class="logo"><img src="images/logo1.png" style='height:80px;'>  </div><!--Logo--> 
            <div class="menu">

                <a href="home.php">Home</a>    
                <a href="#">Quem somos</a>
                <a href="parceria.php">Hospitais</a>
                <a href="cadastro.php">Cadastre-se</a>
                <a href="login.php">Login</a>

        </div><!--menu-->
    </div><!--center-->
</header>
<section class="sobre">
    <div class="extras">
    <img src="images/logo.png" style='height:320px;' />
    <div class="social-media">
        <a href=""><img src="images/instagram.png" /></a>
        <a href=""><img src="images/twitter.png" /></a>
        <a href=""><img src="images/email.png" /></a>
</div>
    </div><!--extras-->
    <div class= "center">
        <div class="texto-sobre">
            <h1>Não é mais sobre buscar <br/><span style="color: rgba(2, 1, 138, 0.97);">"alguém"</span> para te ajudar.</h1>
            <p>As informações sobre a situação clínica do paciente são disponibilizadas pelo PRONTUÁRIO ELETRÔNICO DE PACIENTES PEP vinc. Pessoas vinculadas ao paciente receberão informações sobre os atendimentos realizados das unidades hospitalares. Os hospitais também devem manter o prontuário sempre atualizado e com fácil entendimento. </p>
            <button>Saber mais</button>
        </div>
</div>
        </section>

</body>
</html>

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

html,body{
    height:100%;
    overflow-y: hidden;
    overflow-x: hidden;
    
}

header{
    height:200px;
    padding:20px 0;
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

section.sobre{
    height: calc(100% - 200px);
    position: relative;
}

.extras{
    position: absolute;
    bottom:-450px;
    right:-500px;
    width: 1000px;
    height: 1000px;
    border-radius:50%;
    background-color: rgba(10, 128, 255, 1);
}

.social-media{
    position: absolute;
    right: 510px;
    top:165px;
}

.social-media img{
    display: block;
    width:40px;
    margin:20px 0;
}

.texto-sobre{
    margin-top:-50px;
}

.texto-sobre h1{
    font-size: 50px;
}

.texto-sobre p{
    margin: 20px 0;
    color: black;
    font-size: 14 px;
    font-weight: bold;
    max-width: 800px;
}

.texto-sobre button{
    border:0;
    background-color: rgba(10, 128, 255, 1);
    color: white;
    border-radius: 10px;
    width:100px;
    height:30px;
    cursor: pointer;
}

</style>
        
  
         <span>
            <?php

if(isset($_GET['msg'])) {
    echo $_GET['msg'].'</br>';
}
    ?>
         </span>

<form action="" method= "POST">

    <div class="login">
        
    