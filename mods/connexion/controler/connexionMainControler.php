<?php

#This class contains all actions of the "connexion" module main controler

require_once "mods/connexion/view/connexionDisplayer.php";

class connexionModuleMainControler
{
	public static function checkModAgain(string $module){
		if($module !== "connexion"){
			exit();
		}else{
			return TRUE;
		}
	}

	public static function printTheTitle(){
		 connexionDisplayer::ReturnTheTitle();
	}

	public static function printTheMetaDescription(){
		 connexionDisplayer::ReturnTheMetaDescription();
	}

	public static function printTheContent(){
		 connexionDisplayer::ReturnTheContent();
	}
	public static function getDataFromCache(){
		#Call to a function that get data from the cache here
	}

	public static function insertSomeData(){
		#Call to a function that insert data, either in a file or in a data base
	}
}