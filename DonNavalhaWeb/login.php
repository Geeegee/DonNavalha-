<?php

session_start();

include("conexao.php");

if(isset($_POST['entrar'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios
    WHERE email='$email'
    AND senha='$senha'";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

        $usuario = mysqli_fetch_assoc($resultado);

        $_SESSION['nome'] = $usuario['nome'];

        header("Location: index.php");
        exit;

    }else{

        $erro = "Email ou senha inválidos";

    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Login</title>

<link rel="stylesheet" href="style.css">

<style>

.login-container{

width:100%;
height:100vh;

display:flex;
justify-content:center;
align-items:center;

}

.login-box{

width:400px;

background:white;

padding:40px;

border-radius:15px;

box-shadow:0 0 20px rgba(0,0,0,0.2);

}

.login-box h1{

text-align:center;

margin-bottom:30px;

color:#8B0000;

}

.login-box input{

width:100%;
padding:15px;

margin-bottom:20px;

border-radius:10px;
border:1px solid #ccc;

}

.login-box button{

width:100%;
padding:15px;

background:#8B0000;
color:white;

border:none;

border-radius:10px;

font-size:18px;

cursor:pointer;

}

.erro{

background:#ffcccc;

padding:10px;

border-radius:10px;

margin-bottom:20px;

text-align:center;

}

</style>

</head>

<body>

<div class="login-container">

<div class="login-box">

<h1>Login</h1>

<?php

if(isset($erro)){

echo "<div class='erro'>$erro</div>";

}

?>

<form method="POST">

<input type="email"
name="email"
placeholder="Email"
required>

<input type="password"
name="senha"
placeholder="Senha"
required>

<button type="submit"
name="entrar">

Entrar

</button>

</form>

</div>

</div>

</body>
</html>