<?php

$host    	= "localhost";         
$bdusuario  = "root";              
$bdsenha	= "";         
$bd    		= "testepratico";        
$porta 		= "3306";

$cnct = mysqli_connect("$host", "$bdusuario", "$bdsenha", "$bd", "$porta")or die("cnct off");

?>