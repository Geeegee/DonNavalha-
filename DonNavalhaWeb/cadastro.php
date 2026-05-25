<?php

include("conexao.php");

if(isset($_POST['cadastrar'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios(nome,email,senha)

    VALUES('$nome','$email','$senha')";

    if(mysqli_query($conexao, $sql)){

        header("Location: index.php");
        exit;

    }else{

        echo "Erro ao cadastrar";

    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>Cadastro</title>

<link rel="stylesheet" href="style.css">

<style>

body{

background:#f5f5f5;

}

.cadastro-container{

width:100%;
height:100vh;

display:flex;
justify-content:center;
align-items:center;

}

.cadastro-box{

width:400px;

background:white;

padding:40px;

border-radius:15px;

box-shadow:0 0 20px rgba(0,0,0,0.2);

}

.cadastro-box h1{

text-align:center;
margin-bottom:30px;

color:#8B0000;

}

.cadastro-box input{

width:100%;
padding:15px;

margin-bottom:20px;

border-radius:10px;
border:1px solid #ccc;

}

.cadastro-box button{

width:100%;
padding:15px;

background:#8B0000;
color:white;

border:none;

border-radius:10px;

font-size:18px;

cursor:pointer;

}

</style>

</head>

<body>

<div class="cadastro-container">

<div class="cadastro-box">

<h1>Criar Conta</h1>

<form method="POST">

<input type="text"
name="nome"
placeholder="Nome"
required>

<input type="email"
name="email"
placeholder="Email"
required>

<input type="password"
name="senha"
placeholder="Senha"
required>

<button type="submit"
name="cadastrar">

Cadastrar

</button>

</form>

</div>

</div>

</body>
</html>