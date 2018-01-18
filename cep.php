<html>

	<head>
		<meta charset="utf-8">
			<title> Teste Prático </title>

	</head>
	
	<header>
		<h1>Sistema CRUD</h1>
		<hr align="center" width="100%" size="1" color=black>
	</header>
		
	<nav>
		<h2>&nbsp; &nbsp; &nbsp; &nbsp; MENU </h2>
		<ul>
			<li><a href="index.php">Página Inicial</a></li>
			<li><a href="cep.php"> Cadastrar Usuário </a></li>
			<li><a href="reg.php"> Verificar Usuário </a></li>
			<li><a href="alt.php">Alterar Usuário</a></li>
			<li><a href="cep.php">Deletar Usuário</a></li>
		</ul>
		<hr align="center" width="100%" size="1" color=black>
  	</nav>
		
	<body>
		
		<h2> Novo Usuário </h2>
		<strong>Primeiro Digite o CEP*</strong> <br />
			<div id="cadastra">
				<form id="form" action="usu.php" method="POST" autocomplete="off" >
					<input name="cep" type="text" pattern="[0-9]+$" minlength="8" maxlength="8" placeholder="apenas números" size="11" required/> <input type="submit" value="Buscar Endereço" />
			</div>
	</body>
	
		<footer>
			<hr align="center" width="100%" size="1" color=black>
				<?php
					date_default_timezone_set('America/Sao_Paulo');
					echo "<h2>Última Atualização em: ".date('H:i:s | d/m/y')."</h2>\n"; 
				?>
		</footer>
		</html>




