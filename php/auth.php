<?php
session_start();
if(!isset($_SESSION["meno"])){
header("Location: login.php");
exit(); }
?>