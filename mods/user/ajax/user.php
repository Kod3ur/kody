<?php

#This class contains all actions of the module main controler

class UserModuleMainControler
{
	public static function checkModAgain(string $module){
		if($module !== "user"){
			exit();
		}else{
			return TRUE;
		}
	}

	public static function initializeModDisplayer(){
		#Call to the method that display the amdin mod view here
	}
	public static function getDataFromCache(){
		#Call to a function that get data from the cache here
	}

	public static function insertSomeData(){
		#Call to a function that insert data, either in a file or in a data base
	}
}