<?php
include 'functions.php';
include 'database/Connection.php';
include 'database/QueryBuilder.php';

session_start();

$pdo = Connection::make();

$db = new QueryBuilder($pdo);
$persons = $db->getAll('persons');


include __DIR__ . '/../index.view.php';