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
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(12, 105, 255, 0.22);
            padding: 15px;
            border-radius: 15px;
            width: 60%;
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
            top: 85%;
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
    <form action="adicionar.php" method="POST">
            <fieldset>
                <legend><b>Novo paciente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo do paciente</label>
                </div>
                <br>
                <p><b>Sexo do paciente:</b></p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento do paciente:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>

                <p><b>Hospital em Atendimento:</b></p>
                <input type="radio" id="hospital_id" name="hospital_id" value="2" required>
                <label for="hospital_id">Hospital Pediatrico</label>
                <br>
                <input type="radio" id="hospital_id" name="hospital_id" value="2" required>
                <label for="hospital_id">Hospital Municipal</label>
                <br>
                <input type="radio" id="hospital_id" name="hospital_id" value="2" required>
                <label for="hospital_id">Hospital Estadual</label>
                <br>
                <input type="radio" id="hospital_id" name="hospital_id" value="2" required>
                <label for="hospital_id">Hospital da Mulher</label>
                <br>


                
                <input type="submit" name="submit" id="submit">
                <br><br><br>
                <a href= 'home.php'>Voltar</a></h1>
            </fieldset>
        </form>
    </div>
</body>
</html>