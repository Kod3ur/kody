<?php

#This class contains all actions of the "user" module main controler

require_once "mods/user/view/displayer.php";

class userModuleMainControler
{
	public static function checkModAgain(string $module){
		if($module !== "user"){
			exit();
		}else{
			return TRUE;
		}
	}

	public static function printTheTitle(){
		$title = userDisplayer::ReturnTheTitle();
		echo $title;
	}

	public static function printTheMetaDescription(){
		$MetaDescription = userDisplayer::ReturnTheMetaDescription();
		echo $MetaDescription;
	}

	public static function printTheContent(){
		$content = userDisplayer::ReturnTheContent();
		echo $content;
	}
	public static function getDataFromCache(){
		#Call to a function that get data from the cache here
	}

	public static function insertSomeData(){
		#Call to a function that insert data, either in a file or in a data base
	}
}