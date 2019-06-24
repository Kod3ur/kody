<?php

#Requiring fileloader and displayer manager

	require_once "inc/fileLoader.php";
	require_once "libs/controlers/displayerManager.php";


#Getting the module

	$getMod = $_GET["mod"];
	$module = ModuleAndControler::returnModule($getMod);

#Getting the frontControler

	ModuleAndControler::getFrontControler($module);

#Loading module main controler

	LoadMainControler::loadTheMainControler($module);

#Initializing the right displayer

	$displayer = DisplayerManager::returnTheRightDisplayer($module);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">

<!--Dynamically printing the metadescription-->

	<meta name="description" content="<?php $displayer::printTheMetaDescription(); ?>">

	<!--Let browser know web app is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<base href="/kody/">
	
<!--Importing google icons-->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Including MaterializeCss library and other main css files-->
	
	<link rel="stylesheet" href="libs/materialize/css/materialize.css">
	<link rel="stylesheet" href="mods/home/css/home.css">

<!--Dynamically printing the title-->

	<title><?php $displayer::printTheTitle(); ?></title>
</head>

<!--Including the navbar-->

<?php include_once "libs/tpl/app/navbar.php"; ?>

<!--Dynamically loading the content-->

<div class="container">
<!--Case the current module is home, we insert the home image before the content-->
<?php $displayer === "homeModuleMainControler" ? $displayer::printTheImage():""; ?>
<?php $displayer::printTheContent(); ?>

<!--Case the current module is "CreateUserAccount", we execute the following code-->

<?php 

	if($displayer ==="CreateUserAccountModuleMainControler"){

		if(isset($_POST["submit"])){

			$name = $_POST["name"];
			$email = $_POST["email"];
			$number = intval($_POST["number"]);
			$password = $_POST["password"];
			$password_bis = $_POST["password_bis"];

			$errorOnName = CheckCreateUserAccountData::verifyTheName($name);
			$errorOnEmail = CheckCreateUserAccountData::verifyEmail($email);
			$errorOnNumber = CheckCreateUserAccountData::verifyPhoneNumber($number);
			$errorOnPassword = CheckCreateUserAccountData::verifyPassword($password, $password_bis);
			$DataSerialized = CreateUserAccountDataMapper::serializeUserData($name,$email,$password,$number);
			$errorOnUser = CreateUserAccountDataMapper::checkIfCurrentUserExists($name);
			$errorsCollected = CreateUserAccountModuleMainControler::errorGetter($errorOnName,$errorOnEmail,$errorOnNumber,$errorOnPassword,$errorOnUser);
			CreateUserAccountDisplayer::printFormErrors($errorsCollected);
			CreateUserAccountDataMapper::createNewUser($DataSerialized,$name,$errorsCollected);
			$newSessionInfos = CreateUserAccountModuleMainControler::returnNewSessionInfos($name);
			$feedBack = CreateUserAccountModuleMainControler::saveSessionInfos($errorsCollected,$newSessionInfos);
			CreateUserAccountModuleMainControler::redirectTheUser($feedBack);

		}
	}
?>
</div>


<!--Including the footer-->

<?php include_once "libs/tpl/app/footer.php"; ?>
<body>

<!--Including js libs-->

<script src="libs/jquery/jquery.js"></script>
<script src="libs/materialize/materialize.js"></script>
</body>
</html>