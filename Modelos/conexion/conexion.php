<?php

class Conexion{	

	static public function conectar(){

		$link = new PDO("mysql:host=localhost:3305;dbname=enginiebres",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}