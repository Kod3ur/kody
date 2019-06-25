<?php

class ConnexionDisplayer
{

	public static function ReturnTheTitle(){
		echo "Connexion";
	}

	public static function ReturnTheMetaDescription(){
		echo "Utilser ce formulaire pour vous connecter à votre compte";
	}

	public static function ReturnTheContent(){
		echo "<div class='card-panel card-content center-align teal darken-4 white-text'>
			<h4>Connexion à un compte</h4>
			</div>

			<div class='card-panel card-content'>
			<form method='POST' class='col s12'>
			<div class='row'>

			<div class='input-field col s12'>
			<i class='material-icons'>email
			</i>
			<input type='email' class='validate' name='email'>
			<label for='email'>E-mail </label>
			<span class='helper-text' data-error='invalide' data-success='valide'>
			</span>
			</div>

			<div class='input-field col s12'>
			<i class='material-icons'>call
			</i>
			<input type='password' name='password'>
			<label for='password'>Mot de passe </label>
			</div>

			<div class='input-field col s12'>
			<input type='submit' class='btn waves-effect waves-light teal darken-4' name='submit' value='Connexion'>
			</div>

			</div>
			</form>
			</div>";
	}

	public static function printFormErrors(){
		#This class is used to print errors done while trying to get connected
	}
}