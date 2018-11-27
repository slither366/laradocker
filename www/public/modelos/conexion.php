<?php

class Conexion{

	static public function conectar(){

/*======================================
=            CONEXION LOCAL            =
======================================*/
/*	$link = new PDO("mysql:host=localhost;
					dbname=restpoliticas",
					"root",
					""
					);*/
/*=====  End of CONEXION LOCAL  ======*/

/*======================================
=            CONEXION CLOUD            =
======================================*/
	$link = new PDO("mysql:host=3.16.245.0;
					dbname=restpoliticas",
					"root",
					"caba123lleria"
					);
/*=====  End of CONEXION CLOUD  ======*/



		$link->exec("set names utf8");

		return $link;
	}

}