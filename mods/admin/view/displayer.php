<?php

#This class is used to handle all issues related to "admin" Displayings

class AdminDisplayer
{

	public static function ReturnTheTitle(){
		return "Administration";
	}

	public static function ReturnTheMetaDescription(){
		return "Tableau de bord des administrateurs.";
	}

	public static function ReturnTheContent(){
		return "Bienvenue sur votre tableau de bord !";
	}

	public static function printFormErrors(){
		#This class is used to print errors done in the admin dashboard
	}
}