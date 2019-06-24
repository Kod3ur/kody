<?php

#This class contains all actions of the "home" module main controler

require_once "mods/home/view/displayer.php";

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
		$title = HomeDisplayer::ReturnTheTitle();
		echo $title;
	}

	public static function printTheMetaDescription(){
		$MetaDescription = HomeDisplayer::ReturnTheMetaDescription();
		echo $MetaDescription;
	}

	public static function printTheImage(){
		$image = HomeDisplayer::ReturnTheImage();
		echo $image;
	}

	public static function printTheContent(){
		$content = HomeDisplayer::ReturnTheContent();
		echo $content;
	}
	public static function getDataFromCache(){
		#Call to a function that get data from the cache here
	}

	public static function insertSomeData(){
		#Call to a function that insert data, either in a file or in a data base
	}
}