<?php

#This class is used to verify that data sent by the user through the form have the right type and format

class CheckCreateUserAccountData
{

	public static function verifyTheName(string $name){

		switch ($name) {

			case isset($name) AND !empty($name) AND !is_string($name):

				return "Votre nom doit être une chaîne de caractère";
				break;

			case isset($name) AND !empty($name) AND strlen($name) < 2:

				return "Votre nom est trop court";
				break;

			case isset($name) AND !empty($name) AND preg_match("#<[a-z]+>#i", $name):

				return "Votre nom ne doit contenir aucune balise";
				break;

			case empty($name):

				return "Le champ nom ne peut pas être vide";
				break;
			
			default:
				return FALSE;
				break;
		}
	}

	public static function verifyEmail(string $email){

		if(empty($email)){

			return "Le champ email ne peut pas être vide";

		}elseif(!preg_match("#^[a-z0-9\._-]+@[a-z]+\.[a-z]{2,6}$#i", $email) || preg_match("#<[a-z]+>#i", $email) || is_int($email)){

			return "Votre adresse email est invalide";

		}else{

			return FALSE;
		}
	}

	public static function verifyPhoneNumber(int $number){

		if(empty($number)){

			return "Le champ numéro de téléphone ne peut pas être vide";

		}elseif(isset($number) AND !empty($number) AND !is_int($number)){

			return "Votre numéro de téléphone est invalide";

		}elseif(isset($number) AND !empty($number) AND strlen($number) < 9){

			return "Votre numéro de téléphone est trop court";
		}else{

			return FALSE;
		}
	}

	public static function verifyPassword(string $password, string $password_bis){

		if(empty($password) || empty($password_bis)){

			return "Tous les champs reservés au mot de passe n'ont pas été remplis";

		}elseif(isset($password) AND !empty($password) AND !preg_match("#[a-zA-Z0-9]+#", $password)){

			return "Votre mot de passe doit contenir des chiffres et lettres (majuscules et miniscules)";

		}elseif(strlen($password) < 8){

			return "Votre mot de passe doit avoir au moins 8 caractères";

		}elseif($password !== $password_bis){

			return "Les deux mots de passe ne correspondent pas";
		}else{

			return FALSE;
		}
	}
}