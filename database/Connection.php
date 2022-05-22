<?php

class Connection{

	public static function make(){

	$pdo = new PDO('mysql:host = localhost;dbname=course_db','root','');

	return $pdo;

	
}

}