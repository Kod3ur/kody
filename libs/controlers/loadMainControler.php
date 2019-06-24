<?php

#This class is used to check the module again, before loading module main controler

class LoadMainControler
{
	public static function loadTheMainControler(string $module){
		if($module === "admin"){
			require_once "mods/admin/controler/".$module.".php";
		}elseif($module === "connexion"){
			require_once "mods/connexion/controler/connexion.php";
		}elseif($module === "CreateUserAccount"){
			require_once "mods/CreateUserAccount/controler/CreateUserAccount.php";
		}elseif($module === "user"){
			require_once "mods/user/controler/user.php";
		}elseif($module ==="home"){
			require_once "mods/home/controler/home.php";
		}else{
			exit();
		}
	}
}