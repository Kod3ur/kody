<?php

require_once "inc/userGetter.php";

if(UserGetter::getIpOrUserAgent() === TRUE){
	header("Location:main.php?mod=home&action=view");
}