<?php
session_start();
if(!isset($_SESSION["nama_pengguna"])){
header("Location: logadmin.php");
exit(); }
?>