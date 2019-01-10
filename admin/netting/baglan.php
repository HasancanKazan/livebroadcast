<?php

try {
	$db=new PDO("mysql:host=localhost;dbname=odev",'root','');

}
 catch (PDOException $e)
 { echo $e->getMessage();
 }
?>