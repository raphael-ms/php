<?php 

$nome = 'Raphael';

function teste(){
	global $nome;
	echo $nome;
}

teste();

?>