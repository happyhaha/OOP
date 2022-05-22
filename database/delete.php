<?php 

include '../functions.php';
include 'Connection.php';
include 'QueryBuilder.php';

session_start();

$pdo = Connection::make();

$id = $_GET['id'];
    $db = new QueryBuilder($pdo);
    $db->delete('persons', $id);

    set_flash_message('success','<div class="alert alert-info text-dark" role="alert">Пользователь удалён!</div>');

    header('Location: ../index.php');



