<?php

#This class is used to check the module again, before loading module main controler

class LoadMainControler
{
	public static function loadTheMainControler(string $module){
		if($module === "admin"){
			require_once "mods/admin/controler/adminMainControler.php";
		}elseif($module === "connexion"){
			require_once "mods/connexion/controler/connexionMainControler.php";
		}elseif($module === "CreateUserAccount"){
			require_once "mods/CreateUserAccount/controler/CreateUserAccountMainControler.php";
		}elseif($module === "user"){
			require_once "mods/user/controler/userMainControler.php";
		}elseif($module ==="home"){
			require_once "mods/home/controler/homeMainControler.php";
		}else{
			exit();
		}
	}
}