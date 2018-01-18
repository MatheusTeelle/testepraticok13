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
		<div id="seleciona">
		<h2> Alterar as Informações do Usuário </h2>
		<strong> Confira na Tabela Registro qual Usuário deseja ALTERAR e Selecione seu ID abaixo: <br /><br /></strong>
			<form id="form1" action="altusu.php" method="POST" autocomplete="off" >
				<select name="lista0" id="lista0" style="width: 300px">
					<option><p>Selecionar ID</p> </option>
					<?php include ("cnct.php");
					$busca = "SELECT * FROM usuarios ORDER BY id DESC";
					$consulta=mysqli_query($cnct, $busca);
					while ($dados = mysqli_fetch_array($consulta)){
					echo("<option value='".$dados['id']."'>".$dados['id']."</option>");}
					mysqli_close($cnct);
					?>
				</select>
				<input type="submit" value="Alterar Usúario" />
			</form>
		</div>
		
		<div id="lista">
			<hr align="center" width="100%" size="1" color=black>
			<h2>Registro Usuários</h2>
				<?php 
						include("cnct.php");
							$busca = "SELECT * FROM usuarios ORDER BY id DESC";
							$valores = mysqli_query($cnct,$busca);
							
							echo '<table border="1" text-align="center">
							<tr> 
							<td align="center"> ID </td>  
							<td align="center"> Nome Completo </td>  
							<td align="center"> CEP </td>
							<td align="center"> Rua </td>  
							<td align="center"> Número </td>  
							<td align="center"> Complemento </td>
							<td align="center"> Bairro </td>  
							<td align="center"> Cidade </td>  
							<td align="center"> Estado </td>
							<td align="center"> Telefone Principal </td>  
							<td align="center"> Telefone Adicional </td>
							</tr>';
							
							while($dados = mysqli_fetch_assoc($valores)) {
							echo "<tr>\n";
							echo "<td align='center'>".$dados['id']."</td>\n";
							echo "<td align='center'>".$dados['nome']."</td>\n";
							echo "<td align='center'>".$dados['cep']."</td>\n";
							echo "<td align='center'>".$dados['rua']."</td>\n";
							echo "<td align='center'>".$dados['num']."</td>\n";
							echo "<td align='center'>".$dados['compl']."</td>\n";
							echo "<td align='center'>".$dados['bairro']."</td>\n";
							echo "<td align='center'>".$dados['cidade']."</td>\n";
							echo "<td align='center'>".$dados['estado']."</td>\n";
							echo "<td align='center'>".$dados['tele']."</td>\n";
							echo "<td align='center'>".$dados['tele0']."</td>\n";
							echo "</tr>\n";
							}
							echo "</table>\n"; 						
							mysqli_close($cnct);
					?>
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

