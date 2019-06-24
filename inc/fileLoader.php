<?php

#This class is used to return the module and load the related front controler

class ModuleAndControler
{

	public static function returnModule(string $getMod){

		if($getMod === "admin"){
			return "admin";
		}elseif($getMod === "connexion"){
			return "connexion";
		}elseif($getMod === "CreateUserAccount"){
			return "CreateUserAccount";
		}elseif($getMod === "user"){
			return "user";
		}else{
			return "home";
		}
	}

	public static function getFrontControler(string $module){

		if(isset($module) AND !empty($module) AND $module === "admin"||"user"||"connexion"||"CreateUserAccount"||"home"){
			require_once "libs/controlers/loadMainControler.php";
		}else{
			die();
		}
	}
}