<?php
include("header.php");
?>
<?php
    include("connect.php");

	$username = $_POST['username'];
    $password = $_POST['password'];
    
	$sql = "INSERT INTO calvin_space.users(username, password) VALUES ('$username', '$password')";

	if (mysqli_query($conn, $sql)) {
        echo "Succesfully registered as " . $username . ".";
        echo '<br /><a href="index.php">Home</a>';
        $_SESSION['user'] = $username;
	} else if (mysqli_error($conn)) {
        echo mysqli_error($conn);
    }
    echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
?>