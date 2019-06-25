<?php

#This class contains all actions of the "admin" module main controler

require_once "mods/admin/view/adminDisplayer.php";

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
		 adminDisplayer::ReturnTheTitle();
	}

	public static function printTheMetaDescription(){
		 adminDisplayer::ReturnTheMetaDescription();
	}

	public static function printTheContent(){
		 adminDisplayer::ReturnTheContent();
	}
	public static function getDataFromCache(){
		#Call to a function that get data from the cache here
	}

	public static function insertSomeData(){
		#Call to a function that insert data, either in a file or in a data base
	}
}