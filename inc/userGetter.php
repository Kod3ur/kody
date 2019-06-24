<?php

#This class is used to detect when a user is on web App

class UserGetter
{

	public static function getIpOrUserAgent(){
		if(isset($_SERVER["HTTP_CLIENT_IP"]) || isset($_SERVER["HTTP_X_FORWARDED_FOR"]) || isset($_SERVER["REMOTE_ADDR"]) || isset($_SERVER["HTTP_USER_AGENT"])){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}