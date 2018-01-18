<?php 
	
	include("cnct.php");
		$usu = "UPDATE usuarios SET nome='{$_POST["nome"]}', cep='{$_POST["cep"]}', rua='{$_POST["rua"]}', num='{$_POST["num"]}', compl='{$_POST["compl"]}', bairro='{$_POST["bairro"]}', cidade='{$_POST["cidade"]}', estado='{$_POST["estado"]}', tele='{$_POST["tele"]}', tele0='{$_POST["tele0"]}' WHERE id = '{$_POST["id"]}'"; 
		$reenvia = mysqli_query($cnct,$usu)or die("reenvia off");
	mysqli_close($cnct);
	
	header("Location:reg.php");
	
?>