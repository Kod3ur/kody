<?php

#This class is used to handle all issues related to "admin" Displayings

class AdminDisplayer
{

	public static function ReturnTheTitle(){
		echo "Administration";
	}

	public static function ReturnTheMetaDescription(){
		echo "Tableau de bord des administrateurs.";
	}

	public static function ReturnTheContent(){
		echo "Bienvenue sur votre tableau de bord !";
	}

	public static function printFormErrors(){
		#This class is used to print errors done in the admin dashboard
	}
}