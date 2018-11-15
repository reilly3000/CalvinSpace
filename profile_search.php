<?php 
include("header.php");
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  User: <input type="text" name="user">
  <input type="submit">
</form>
<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST['user'];
    $sql = "SELECT * FROM calvin_space.profiles WHERE user='$user'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) != 0 && !empty($user)) {
        echo 'Page found. <a href="view_profile.php?profile=' . $user . '">Visit it here!</a>';
    } else {
        echo "Page not found.";
    }
}
echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
?>