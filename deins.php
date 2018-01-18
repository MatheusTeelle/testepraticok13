<?php

	include("cnct.php");
	
		$deins = " DELETE FROM usuarios WHERE id = '{$_POST["lista"]}'"; 
		$del = mysqli_query($cnct,$deins)or die("del off");
		
		$zera = "ALTER TABLE usuarios DROP id";
		$zeraid = mysqli_query($cnct,$zera)or die("zeraid off");
		$tera = "ALTER TABLE usuarios AUTO_INCREMENT = 1";
		$teraid = mysqli_query($cnct,$tera)or die("teraid off");
		$pera = "ALTER TABLE usuarios ADD id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST"; 
		$peraid = mysqli_query($cnct,$pera)or die("peraid off");
		
		mysqli_close($cnct);
	
	header("Location:reg.php");


?>