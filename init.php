<?php
include 'connect.php';//connexion a la base




//include nav bar on all pages except for the pages with the no navbar variable in them
	if(!isset($nonavbar)){

include 'includes/navbar.php';

}

include 'languages/english.php';//language route



?>