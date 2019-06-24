<?php

#This class contains all actions of the "admin" module main controler

require_once "mods/admin/view/displayer.php";

class adminModuleMainControler
{
	public static function checkModAgain(string $module){
		if($module !== "admin"){
			exit();
		}else{
			return TRUE;
		}
	}

	public static function printTheTitle(){
		$title = adminDisplayer::ReturnTheTitle();
		echo $title;
	}

	public static function printTheMetaDescription(){
		$MetaDescription = adminDisplayer::ReturnTheMetaDescription();
		echo $MetaDescription;
	}

	public static function printTheContent(){
		$content = adminDisplayer::ReturnTheContent();
		echo $content;
	}
	public static function getDataFromCache(){
		#Call to a function that get data from the cache here
	}

	public static function insertSomeData(){
		#Call to a function that insert data, either in a file or in a data base
	}
}