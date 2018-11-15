<?php 
include("header.php");
$_SESSION['user'] = "";
session_destroy();
echo "You have been logged out.";
echo "<br />";
echo '<a href="index.php">Home</a>';
echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
?>