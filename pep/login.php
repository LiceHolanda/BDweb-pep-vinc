<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto </title> 


    <style>
        body{

            
            background-image: url('images/index.jpg');
            background-repeat: no-repeat;

            font-family: Arial, Helvetica, sans-serif;
            

            <span>
        <?php
            if($_GET['msg']) {
                echo $_GET['msg'].'</br>';
            }
        ?>
    </span>

        }
        .login{
            background-color: LightSteelBlue;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 15px;
            color: black;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid black;
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
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover{
            background-color: deepskyblue;
        }
        a{
            color: black;
        }
    </style>
</head>
<body>



<form action="validar_usuario.php" method= "POST">

    <div class="login">
        <h1>Login</h1>

        

        <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
        <br><br>
        <div class="inputBox">
        <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                </div>
                <br>

    
        <button type="submit">Enviar</button>
        <nav>
            <ul>
           
            <h1 style=" text-align: center;font-family: verdana; font-size: 14px; "><a href="index.php">Voltar</a>

                  
            </ul>
        </nav>
    </div>
    </form>
</body>
</html>