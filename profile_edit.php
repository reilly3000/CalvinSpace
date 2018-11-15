<!DOCTYPE html>
<html>
<head>
    <?php
    include("header.php");
    ?>
</head>
<body>
    <h1>Edit your profile</h1>
    <form action="profile_edit_parse.php" id="form" method="post">
    <input type="submit" value="Submit">
    </form>
    <?php
    include("connect.php");

    session_start();

    $user = $_SESSION['user'];

    $sql = "SELECT * FROM calvin_space.profiles WHERE user='$user'";

    $result = mysqli_query($conn, $sql);

    $content = mysqli_fetch_array($result)['content'];

    echo '<textarea name="content" form="form" id="profile-editor">' . $content .'</textarea><br />';
    echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
    ?>
</body>
</html>