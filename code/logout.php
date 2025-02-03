<?php 
include '../config.php';
$admion=new Admin();
session_destroy();
header('location:../login.php');
?>