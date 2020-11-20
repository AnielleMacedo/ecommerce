<?php 
require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	echo "oi gente testando";

	$sql = new ProjectHCode\DB\Sql();

	$results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results); //qdo n uso o formato json_encode o sql da erro de acentoss ao retornarr stabelas ddo database

});

$app->run(); //faz rodar na telqa a aplicacao

?>