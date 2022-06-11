<?php
$host = "localhost";
$user = "kyeong305";
$pass = "bongsa4167";
$db_name = "SURVIVOR";
$con = new mysqli($host, $user, $pass, $db_name);
function formatDate($date){
	return date('g:i a', strtotime($date));
}
?>