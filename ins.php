<?php 
	
	include("cnct.php");
	
		$usu = "INSERT INTO usuarios(id, nome, cep, rua, bairro, cidade, estado, num, compl, tele, tele0)"
				." VALUES ('', '{$_POST["nome"]}', '{$_POST["cep"]}', '{$_POST["rua"]}', '{$_POST["bairro"]}', '{$_POST["cidade"]}', '{$_POST["estado"]}', '{$_POST["num"]}', '{$_POST["compl"]}', '{$_POST["tele"]}', '{$_POST["tele0"]}')"; 
		$envia = mysqli_query($cnct,$usu)or die("envia off");
				
	mysqli_close($cnct);
	
	header("Location:reg.php");
	
?>