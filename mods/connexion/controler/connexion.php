<?php

#This class contains all actions of the "connexion" module main controler

require_once "mods/connexion/view/displayer.php";

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
		$title = connexionDisplayer::ReturnTheTitle();
		echo $title;
	}

	public static function printTheMetaDescription(){
		$MetaDescription = connexionDisplayer::ReturnTheMetaDescription();
		echo $MetaDescription;
	}

	public static function printTheContent(){
		$content = connexionDisplayer::ReturnTheContent();
		echo $content;
	}
	public static function getDataFromCache(){
		#Call to a function that get data from the cache here
	}

	public static function insertSomeData(){
		#Call to a function that insert data, either in a file or in a data base
	}
}