<?php
include("../res/x5engine.php");
$nameList = array("kln","nu4","vr8","mrx","ts8","a7j","jdj","ael","rjt","hv4");
$charList = array("T","K","7","D","8","A","3","Y","E","3");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
