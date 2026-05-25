<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Agendamento - Don Navalha</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">

</head>

<body>

<header>

<div class="logo-area">

<img src="images/logo.png" class="logo-header">

<h2>Don Navalha</h2>

</div>

<nav>

<a href="index.php">Home</a>
<a href="barbeiros.php">Barbeiros</a>
<a href="agendamento.php" class="active">Agendamento</a>
<a href="login.php">Login</a>

</nav>

</header>

<section class="agendamento-container">

<div class="agendamento-box">

<h1>
<i class="fa-solid fa-calendar-check"></i>
AGENDAR HORÁRIO
</h1>

<p>
Escolha seu barbeiro, serviço e horário.
</p>

<form>

<div class="grupo-input">

<label>Seu Nome</label>

<input type="text" placeholder="Digite seu nome">

</div>

<div class="grupo-input">

<label>Escolha o Barbeiro</label>

<select>

<option>Douglas</option>
<option>Higor</option>
<option>João</option>

</select>

</div>

<div class="linha-form">

<div class="grupo-input">

<label>Data</label>

<input type="date">

</div>

<div class="grupo-input">

<label>Horário</label>

<select>

<option>09:00</option>
<option>09:30</option>
<option>10:00</option>
<option>10:30</option>
<option>14:00</option>
<option>14:30</option>
<option>16:00</option>
<option>16:30</option>
<option>17:00</option>
<option>17:30</option>
<option>18:00</option>
<option>18:30</option>

</select>

</div>

</div>

<button type="submit">

<i class="fa-solid fa-scissors"></i>

Confirmar Agendamento

</button>

</form>

</div>

</section>

</body>
</html>