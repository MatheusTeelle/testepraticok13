<html>

	<head>
		<meta charset="utf-8">
			<title> Teste Prático </title>

	</head>
	
	<header>
		<h1 align="center">Sistema CRUD</h1>
		<hr align="center" width="100%" size="1" color=black>
	</header>
	
		
	<body>
		<div align="center">
			<h2 align="center">MENU</h2>
			<form method="get" action="cep.php"><button type="submit">Cadastrar Usuário</button></form>
			<form method="get" action="reg.php"><button type="submit">Verificar Usuário</button></form>
			<form method="get" action="alt.php"><button type="submit">Alterar Usuário</button></form>
			<form method="get" action="del.php"><button type="submit">Deletar Usuário</button></form>
		</div>
	</body>
	
		<footer>
			<hr align="center" width="100%" size="1" color=black>
				<?php
					date_default_timezone_set('America/Sao_Paulo');
					echo "<h2 align=center>Última Atualização em: ".date('H:i:s | d/m/y')."</h2>\n"; 
				?>
		</footer>
		
</html>