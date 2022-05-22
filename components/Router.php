<?php

/**
 * 
 */


class Router {

	protected $route;

	protected $routes;
	
	public function __construct(array $routes){

		$this->routes = $routes;

		$this->route = $_SERVER['REQUEST_URI'];


	}

	public function run(){

		if(array_key_exists($this->route, $this->routes)){
			include $this->routes[$this->route]; exit;

		}
		else{
			echo '404';
		}
			}
}