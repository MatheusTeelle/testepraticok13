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
		<div id="altera">
			<h2> Alterar as Informações do Usuário </h2>
			<strong> Altere os Campos necessários abaixo: <br /><br /></strong>
			<?php 
		
				include("cnct.php");
					$altusu = " SELECT * FROM usuarios WHERE id = '{$_POST["lista0"]}'";
					$alt = mysqli_query($cnct,$altusu)or die("alt off");
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
							while($dados = mysqli_fetch_assoc($alt)) {
							echo "<meta charset='utf-8'>\n";
							echo "<form id='form3' action='savalt.php' method='POST'>\n";
							echo "<tr>\n";
							echo "<input name='id' type='hidden' size='2' value='".$dados['id']."'/>\n";
							echo "<td align='center'><input name='idver' type='text' disabled size='2' value='".$dados['id']."'/></td>\n";
							echo "<td align='center'><input name='nome' type='text' pattern='[[A-Za-zÀ-ú\s]+$' maxlength='80' required size='33' value='".$dados['nome']."'/></td>\n";
							echo "<td align='center'><input name='cep' type='text' pattern='[0-9]+$' minlength='8' maxlength='8' placeholder='números' required size='10' value='".$dados['cep']."'/></td>\n";
							echo "<td align='center'><input name='rua' type='text'  pattern='[[A-Za-zÀ-ú\s]+$' maxlength='80' required size='33' value='".$dados['rua']."'/></td>\n";
							echo "<td align='center'><input name='num' type='text' pattern='[0-9]+$' minlength='2' maxlength='4' placeholder='núm.' required size='2' value='".$dados['num']."'/></td>\n";
							echo "<td align='center'><input name='compl' type='text' pattern='[[A-Za-zÀ-ú\s]+$' size='10' value='".$dados['compl']."'/></td>\n";
							echo "<td align='center'><input name='bairro' type='text' pattern='[[A-Za-zÀ-ú\s]+$' required size='12' value='".$dados['bairro']."'/></td>\n";
							echo "<td align='center'><input name='cidade' type='text' pattern='[[A-Za-zÀ-ú\s]+$' required size='12' value='".$dados['cidade']."'/></td>\n";
							echo "<td align='center'><input name='estado' type='text' pattern='[[A-Za-zÀ-ú\s]+$' required size='2' value='".$dados['estado']."'/></td>\n";
							echo "<td align='center'><input name='tele' type='tel' pattern='[0-9]+$' minlength='10' maxlength='11' placeholder='números' required size='10' value='".$dados['tele']."'/></td>\n";
							echo "<td align='center'><input name='tele0' type='tel' pattern='[0-9]+$' minlength='10' maxlength='11' placeholder='números' size='10' value='".$dados['tele0']."'/></td>\n";
							echo "</tr>\n";
							}
							echo "</table>\n";
							echo "<br /><input type='submit' value='Atualizar Usuário' /> <input type='reset' value='Restaurar Dados' />";
							echo "</form>";
							 
	
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