<?php

#This class contains all actions of the "home" module main controler

require_once "mods/home/view/homeDisplayer.php";

class homeModuleMainControler
{
	public static function checkModAgain(string $module){
		if($module !== "home"){
			exit();
		}else{
			return TRUE;
		}
	}

	public static function printTheTitle(){
		 HomeDisplayer::ReturnTheTitle();
		
	}

	public static function printTheMetaDescription(){
		 HomeDisplayer::ReturnTheMetaDescription();
	}

	public static function printTheImage(){
		HomeDisplayer::ReturnTheImage();
	}

	public static function printTheContent(){
		 HomeDisplayer::ReturnTheContent();
	}
	public static function getDataFromCache(){
		#Call to a function that get data from the cache here
	}

	public static function insertSomeData(){
		#Call to a function that insert data, either in a file or in a data base
	}
}