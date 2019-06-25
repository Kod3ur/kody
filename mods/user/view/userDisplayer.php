<?php

#This class is used to handle all issues related to "user" Displayings

class UserDisplayer
{

	public static function ReturnTheTitle(){
		return "Dashboard utilisateur";
	}

	public static function ReturnTheMetaDescription(){
		return "Bienvenue sur votre tableau de bord";
	}

	public static function ReturnTheContent(){
		return "Votre tableau de bord";
	}

	public static function printFormErrors(){
		#This class is used to print errors done in the user dashboard
	}
}