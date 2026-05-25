<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Don Navalha</title>

<link rel="stylesheet" href="style.css">

<style>

body{
    margin:0;
    padding:0;
    font-family:Arial, Helvetica, sans-serif;
    background:#f5f5f5;
}

header{
    background:white;
    padding:20px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.logo-area{
    display:flex;
    align-items:center;
    gap:15px;
}

.logo-area img{
    width:70px;
    height:70px;
    object-fit:cover;
}

.logo-area h1{
    font-size:38px;
    color:#8B0000;
    font-family: "Old English Text MT", serif;
}

nav a{
    margin-left:15px;
    text-decoration:none;
    color:#333;
    font-weight:bold;
    transition:0.3s;
    font-size:14px;
}

nav a:hover{
    color:#8B0000;
}

.hero{
    width:100%;
    height:80vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero h2{
    font-size:55px;
    color:#8B0000;
    margin-bottom:20px;
}

.hero p{
    font-size:22px;
    color:#555;
    margin-bottom:30px;
}

.hero a{
    padding:15px 35px;
    background:#8B0000;
    color:white;
    text-decoration:none;
    border-radius:10px;
    font-size:18px;
    transition:0.3s;
}

.hero a:hover{
    background:#b30000;
}

.usuario{
    margin-top:20px;
    font-size:20px;
    color:#333;
}

/* BOTÕES SOCIAIS */
.social-buttons{
    margin-top:30px;
    display:flex;
    gap:15px;
    flex-wrap:wrap;
    justify-content:center;
}

.social-buttons a{
    padding:12px 20px;
    color:white;
    text-decoration:none;
    border-radius:8px;
    font-weight:bold;
    transition:0.3s;
}

.social-buttons a:hover{
    transform:scale(1.05);
}

.insta{ background:#E1306C; }
.whats{ background:#25D366; }
.maps{ background:#4285F4; }

</style>

</head>

<body>

<header>

<div class="logo-area">

<img src="images/logo.png">

<h1 style="font-size:42px;">
𝔇𝔬𝔫 𝔑𝔞𝔳𝔞𝔩𝔥𝔞
</h1>

</div>

<nav>

<a href="index.php">Home</a>
<a href="servicos.php">Serviços</a>
<a href="agendamento.php">Agendamento</a>
<a href="login.php">Login</a>
<a href="cadastro.php">Cadastro</a>

</nav>

</header>

<section class="hero">

<h2>Bem-vindo à Don Navalha</h2>

<p style="font-size:22px; color:#555;">
𝑬𝒔𝒕𝒊𝒍𝒐, 𝒑𝒓𝒆𝒔𝒆𝒏ç𝒂 𝒆 𝒒𝒖𝒂𝒍𝒊𝒅𝒂𝒅𝒆 𝒆𝒎 𝒄𝒂𝒅𝒂 𝒄𝒐𝒓𝒕𝒆
</p>

<a href="agendamento.php">Agendar Horário</a>

<!-- BOTÕES SOCIAIS -->
<div class="social-buttons">

<a class="insta" href="https://www.instagram.com/don.navalhabarbearia/?__pwa=1" target="_blank">
Instagram
</a>

<a class="whats" href="https://wa.me/5511969661750" target="_blank">
WhatsApp
</a>

<a href="https://www.google.com/maps/search/?api=1&query=Rua+Otusco+402+Jardim+Ip%C3%AA+05797-430" target="_blank">
Como chegar
</a>

</div>

<div class="usuario">

<?php
if(isset($_SESSION['nome'])){
    echo "Bem-vindo, " . $_SESSION['nome'];
}
?>

</div>

</section>

</body>
</html>