<?php

#This class contains all actions of the "CreateUserAccount" module main controler

require_once "mods/CreateUserAccount/view/displayer.php";
require_once "mods/CreateUserAccount/model/mappers/CreateUserAccount.php";
require_once "mods/CreateUserAccount/ajax/CreateUserAccount.php";

class CreateUserAccountModuleMainControler
{
	public static function checkModAgain(string $module){
		if($module !== "CreateUserAccount"){
			exit();
		}else{
			return TRUE;
		}
	}

	public static function getIp(){

		if(isset($_SERVER["HTTP_CLIENT_IP"])){

			return $_SERVER["HTTP_CLIENT_IP"];

		}elseif(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){

			return $_SERVER["HTTP_X_FORWARDED_FOR"];

		}elseif(isset($_SERVER["REMOTE_ADDR"])){

			return $_SERVER["REMOTE_ADDR"];
		}
	}

	public static function printTheTitle(){
		$title = CreateUserAccountDisplayer::ReturnTheTitle();
		echo $title;
	}

	public static function printTheMetaDescription(){
		$MetaDescription = CreateUserAccountDisplayer::ReturnTheMetaDescription();
		echo $MetaDescription;
	}

	public static function printTheContent(){
		$content = CreateUserAccountDisplayer::ReturnTheContent();
		echo $content;
	}

	public static function errorGetter($errorOnName,$errorOnEmail,$errorOnNumber,$errorOnPassword, $errorOnUser){
		
		$errorsCollected = [];

		if($errorOnName !== FALSE){

			$errorsCollected["name"] = $errorOnName;
		}

		if($errorOnEmail !== FALSE){

			$errorsCollected["email"] = $errorOnEmail;
		}

		if($errorOnNumber !== FALSE){

			$errorsCollected["number"] = $errorOnNumber;
		}

		if($errorOnPassword !== FALSE){

			$errorsCollected["password"] = $errorOnPassword;
		}

		if($errorOnUser !== FALSE){

			$errorsCollected["user"] = $errorOnUser;
		}

		return $errorsCollected;
	}

	public static function returnNewSessionInfos(string $name){

		if(null !== self::getIp()){

			$ip = self::getIp();

			$userInfos = $_SERVER["HTTP_USER_AGENT"];
			$sessionId = session_id();
			$startTime = time();
			$timeOut = 0;
			$lastPingInfos =& $startTime;

			$newSessionInfos = ["name" =>$name,
								"ip" =>$ip,
								"userInfos" =>$userInfos,
								"sessionId" =>$sessionId,
								"timeOut" =>$timeOut,
								"lastPingInfos" =>$lastPingInfos,
								"startTime" =>$startTime];

			return $newSessionInfos;

		}else{

			die();
		}
	}

	public static function saveSessionInfos(array $errorsCollected, array $newSessionInfos){

		if(empty($errorsCollected) AND null !== self::getIp() AND is_file("store/onlineUser/user".self::getIp().".php") === FALSE){

			$openSessionFile = fopen("store/onlineUser/user".self::getIp().".php", "w");

			fwrite($openSessionFile, $newSessionInfos);

			chmod("store/onlineUser/user".self::getIp().".php", 440);

			fclose($openSessionFile);

			return TRUE;

		}else{

			die();
		}
	}

	public static function redirectTheUser(bool $feedBack){

		if($feedBack === TRUE){

			header("Location:main.php?mod=user&action=view");
		}else{

			die();
		}
	}
}