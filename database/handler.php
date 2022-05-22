<?php 

include '../functions.php';
include 'Connection.php';
include 'QueryBuilder.php';

session_start();

$pdo = Connection::make();

$action = $_GET['action'];



if($action = 'create'){
	

	$db = new QueryBuilder($pdo);
    $db->create('persons', [
    	"first_name" => $_POST['first_name'],
    	"last_name" => $_POST['last_name'],
    	"username" => $_POST['username']
    ]);

    set_flash_message('success','<div class="alert alert-info text-dark" role="alert">Пользователь добавлен!</div>');

    header('Location: ../index.php');

}

