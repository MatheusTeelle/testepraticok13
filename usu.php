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
			<li><a href="del.php">Deletar Usuário</a></li>
		</ul>
		<hr align="center" width="100%" size="1" color=black>
  	</nav>
		
	<body>
		
		<h2> Novo Usuário </h2>
		<strong>Continune o Cadastro</strong>
		<p>(*) itens obrigatórios</p>
			<?php
				function pegacep($cep){
				$url = "http://viacep.com.br/ws/$cep/xml/";
				$xml = simplexml_load_file($url);
				return $xml;}
				
				$end =(pegacep($_POST["cep"]));
								
			?>
				<form id="form" action="ins.php" method="POST" autocomplete="off" >
					<strong>Nome Completo*:</strong> <br />
						<input name="nome" type="text" pattern="[[A-Za-zÀ-ú\s]+$" maxlength="80" size="40" required /> <br /><br />
					<strong>CEP:</strong>
						<input name="cep" type="text" pattern="[0-9]+$" minlength="8" maxlength="8"  placeholder="apenas números" size="8" required value="<?php echo $_POST["cep"]?>"/>
					<strong>Endereço:</strong>					
						<input name="rua" type="text" pattern="[[A-Za-zÀ-ú\s]+$" size="40" required value="<?php echo "$end->logradouro"?>"/>
					<strong>Número*:</strong>
						<input name="num" type="text" pattern="[0-9]+$" minlength="2" maxlength="4" required placeholder="apenas números" size="15" required /> <br /><br />
					<strong>Complemento:</strong>
						<input name="compl" type="text" pattern="[[A-Za-zÀ-ú\s]+$" id="compl" pattern="[a-zA-Z\s]+$" size="15" />
					<strong>Bairro:</strong>				
						<input name="bairro" type="text" pattern="[[A-Za-zÀ-ú\s]+$" size="15" required value="<?php echo "$end->bairro"?>" />		
					<strong>Cidade:</strong>				
						<input name="cidade" type="text" pattern="[[A-Za-zÀ-ú\s]+$" size="15" required value="<?php echo "$end->localidade"?>" />
					<strong>Estado:</strong>				
						<input name="estado" type="text"  pattern="[[A-Za-zÀ-ú\s]+$" size="1" required value="<?php echo "$end->uf"?>"/> <br /><br />					
					<strong>DDD + Telefone Principal*:</strong>
						<input name="tele" type="tel" pattern="[0-9]+$" minlength="10" maxlength="11" placeholder="apenas números" size="15" required /> 
					<strong>DDD + Telefone Adicional:</strong>
						<input name="tele0" type="tel" pattern="[0-9]+$" placeholder="apenas números" minlength="10" maxlength="11" size="15" /> <br /><br />
								<input type="submit" value="Cadastrar" />
			</form>
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