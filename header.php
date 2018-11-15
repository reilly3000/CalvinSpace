<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CalvinSpace</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<div>
<a href="index.php" id="logo"><img src="logo.png" style="width: 25%; height: auto;"></a>
<p style="position: absolute; top: 0px; left: 26%;">
<?php 
session_start();
if (!array_key_exists('user', $_SESSION)) {
    echo '<a href="login.php">
            Login
        </a>
        <br />
        <a href="register.php">
            Register your account
        </a>
        <br />';
}
?>
<a href="profile_search.php">Search profiles</a>
</p>
</div>
<br />
