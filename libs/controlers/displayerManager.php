<?php

#This class is used to initialize the right displayer, considering the current module

class DisplayerManager
{
	public static function returnTheRightDisplayer(string $module){
		switch ($module) {
			case 'admin':
				return "adminModuleMainControler";
				break;

			case 'user':
				return "userModuleMainControler";
				break;

			case 'connexion':
				return "connexionModuleMainControler";
				break;

			case 'CreateUserAccount':
				return "CreateUserAccountModuleMainControler";
				break;

			case 'home':
				return "homeModuleMainControler";
				break;
			
			default:
				die();
				break;
		}
	}
}