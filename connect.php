<?php
try{
	$BDD= new PDO('mysql:host=localhost;dbname=shop;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	
}

catch(EXCEPTION $e){
	die('erreur :'.$e->getMessage());
}


?>