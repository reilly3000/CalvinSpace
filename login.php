<?php
include("header.php");
?>
<h1>
    Login
</h1>
<form action="login_parse.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" placeholder="Submit">
</form>
<?php 
echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
?>