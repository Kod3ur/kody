<?php

#This class is used as entity manager. So, it manages all transactions related to data access

class CreateUserAccountDataMapper
{
	public static function serializeUserData(string $name, string $email, string $password, int $number){

		$CleanedName = htmlspecialchars(trim($name));
		$CleanedEmail = htmlspecialchars(trim($email));
		$CleanedNumber = htmlspecialchars(trim($number));
		$CleanedPassword = htmlspecialchars(trim(sha1($password)));

		$DataToSerialize = ["name" => $CleanedName,
							"email" => $CleanedEmail,
							"number" => $CleanedNumber,
							"password" => $CleanedPassword];
		$DataSerialized = serialize($DataToSerialize);

		return $DataSerialized;
	}

	public static function checkIfCurrentUserExists(string $name){

		if(is_file("store/user/".$name.".php")){

			return "Cet utilisateur existe déjà";

		}else{

			return FALSE;
		}		
	}

		public static function createNewUser( string $DataSerialized, string $name, array $errorsCollected){

		if(is_file("store/user/".$name.".php") || !empty($errorsCollected)){

			die();

		}else{

			$createAndOpenFile = fopen("store/user/".$name.".php", "w");

			if($createAndOpenFile === FALSE){

				die();

			}else{

				fwrite($createAndOpenFile, $DataSerialized);

				chmod("store/user/".$name.".php", 440);

				fclose($createAndOpenFile);
			}
		}
	}

}