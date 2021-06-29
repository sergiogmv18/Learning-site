<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, black,cyan);

        }
        div{
            background-color: rgba(0, 0, 0, 0.8);
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;

        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            color:white;
            border-radius: 10px;
            font-size: 15px;
            cursor:pointer;
        }
        button:hover{
        background-color: deepskyblue;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <input type="text" placeholder="Usuário">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button>Acessar</button>
    </div>
</body>
</html>