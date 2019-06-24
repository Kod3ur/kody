<?php

#This class is used to handle all issues related to "CreatUserAccount" Displayings

class CreateUserAccountDisplayer
{

	public static function ReturnTheTitle(){
		return "Créer un compte utilisateur";
	}

	public static function ReturnTheMetaDescription(){
		return "Remplir tous les champs de ce formulaire pour créer un compte";
	}

	public static function ReturnTheContent(){
		return "<div class='card-panel card-content center-align teal darken-4 white-text'>
			<h4>Créer un compte</h4>
			</div>

			<div class='card-panel card-content'>
			<form method='POST' class='col s12'>
			<div class='row'>

			<div class='input-field col s12'>
			<i class='material-icons prefix'>account_circle
			</i>
			<input type='text' name='name'>
			<label for='name'>Nom </label>
			</div>

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
			<input type='number' name='number'>
			<label for='number'>Numéro de Téléphone </label>
			</div>

			<div class='input-field col s12'>
			<i class='material-icons'>call
			</i>
			<input type='password' name='password'>
			<label for='password'>Créer un mot de passe </label>
			</div>

			<div class='input-field col s12'>
			<i class='material-icons'>call
			</i>
			<input type='password' name='password_bis'>
			<label for='password_bis'>Tapez encore ce mot de passe </label>
			</div>

			<div class='input-field col s12'>
			<input type='submit' class='btn waves-effect waves-light teal darken-4' name='submit' value='Inscription'>
			</div>

			</div>
			</form>
			</div>";
	}

	public static function printFormErrors(array $errorsCollected){

		if(!empty($errorsCollected)){

			foreach ($errorsCollected as $error) {
				echo '<span class=\'red-text\'>'. $error.'</span><br/>';
			}
		}
		
	}
}