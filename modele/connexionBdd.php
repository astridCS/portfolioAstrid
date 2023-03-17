<?php
try{
	
$bdd= new PDO("mysql:host=astridh322.mysql.db;dbname=astridh322;charset=UTF8", "astridh322","ffXCHgfnsgHN");  
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>