<?php
$hostname_registration = "localhost";
$database_registration = "register";
$username_registration = "root";
$password_registration = "";
$registration = mysql_pconnect($hostname_registration, $username_registration, $password_registration) or trigger_error(mysql_error(),E_USER_ERROR); 
?>