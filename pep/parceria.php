
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulário | PEP_vinc</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            
        }
        .box{
            color: black;
            position: absolute;
            top: 50%;
            left: 60%;
            transform: translate(-30%,-60%);
            background-color: rgba(12, 105, 255, 0.22);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
       
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 20%;
            position: absolute;
            top: 80%;
            left: 40%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>

<body>
    <div class="box">
    <form action="addHospital.php" method="POST">
            <fieldset>
                <legend><b>Solicitar Parceria</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome da instituição</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
               
                <p>Tipo:</p>
                <input type="radio" id="publico" name="tipo_id" value="2" required>
                <label for="publico">Público</label>
                <br>
                <input type="radio" id="particular" name="tipo_id" value="1" required>
                <label for="particular">Particular</label>
                <br>
                <input type="radio" id="outro" name="tipo_id" value="3" required>
                <label for="outro">Outro</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br><br>
                <a href= 'index.php'>Voltar</a></h1>
                
            </fieldset>
        </form>
    </div>
</body>
<body>
    <header>
    <h1 style="color:black; background-color:white; font-family: verdana; font-size: 17px;">
        <div class="center"> 
            <div class="logo"><img src="images/logo1.png" style='height:70px;'>  </div><!--Logo--> 
            <div class="menu">

                <br><br>
                <a href="buscarHospitais.php">Hospitais que já usam o PEP vinc</a>
                

        </div><!--menu-->
    </div><!--center-->
</header>
<section class="sobre">
    <div class="extras">
   
 
    </div><!--extras-->
    <div class= "center">
        <div class="texto-sobre">
            <h1>Seja um hospital <br/><span style="color: blue;">parceiro</span> </h1>

            <br>
            <p>Faça a sua solicitação e entraremos em contato. </p>
            <br>
            <p>Conheça os benefícios em ter o sistema PEP vinc em sua unidade </p>
            <button>Saber mais</button>
        </div>
</div>




</html>