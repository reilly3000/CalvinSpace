<?php
include("connect.php");

$name = $_GET['name'];
$content = $_GET['content'];
$user = $_SESSION['user'];

$content = str_replace("'", "\'", $content);
$content = str_replace('"', '\"', $content);

$sql = "INSERT INTO calvin_space.posts(name, content, user) VALUES ('$name', '$content', '$user')";

if (mysqli_query($conn, $sql)) {
    echo "<script>location.href='index.php';</script>";
} else {
    echo mysqli_error($conn);
} 
echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
?>