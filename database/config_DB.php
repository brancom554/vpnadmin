<?php


// include ("includes/validator.php");
$DBhost = "localhost";
$DBuser = "willdev_vpn";
$DBpass = "gJ~g{FPp~ZL(";
$DBname = "willdev_vpn";

$DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

if ($DBcon->connect_errno) {
    die("ERROR : -> ".$DBcon->connect_error);
}
?>
