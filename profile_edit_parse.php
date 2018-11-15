<?php
include("connect.php"); 

$user = $_SESSION['user'];
$content = $_POST['content'];

$content = str_replace("'", "\'", $content);
$content = str_replace('"', '\"', $content);

$sql = "UPDATE calvin_space.profiles SET content = '$content' WHERE user = '$user'";

if (mysqli_query($conn, $sql)) {
    echo 'Your profile has been updated.<br /><a href="profile.php">View profile</a><br />';
} else {
    echo mysqli_error($conn);
}
echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
?>