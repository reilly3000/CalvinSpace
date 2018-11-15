<!DOCTYPE html>
<html>
    <?php
    include("header.php");
    ?>
<body>
</body>
<?php
include("connect.php");
session_start();

$user = $_SESSION['user'];

$sql = "SELECT * FROM calvin_space.profiles WHERE user='$user'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 0) {
    echo "<h1>Your Profile</h1>";
    mysqli_data_seek($result, 0);
    echo mysqli_fetch_array($result)['content'];
    echo '<br /><a href="profile_edit.php">Edit your profile!<a>';
} else {
    $sql = "INSERT INTO calvin_space.profiles(content, user) VALUES ('New page', '$user')";
    mysqli_query($conn, $sql);
    if (mysqli_error($conn)) {
        echo mysqli_error($conn);
    }
    $sql = "SELECT * FROM calvin_space.profiles WHERE user='$user'";
    $result = mysqli_query($conn, $sql);
    echo "<h1>" . mysqli_fetch_array($result)['user'] . "'s Profile</h1>";
    mysqli_data_seek($result, 0);
    echo mysqli_fetch_array($result)['content'];
    echo '<a href="profile_edit.php">Edit your profile!<a>';
}
echo '<br /><a href="index.php">Home</a><br /><h2 style="text-align: left;">Posts</h2>';

$sql = "SELECT * FROM calvin_space.posts WHERE user='$user' ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_error($conn)) {
    echo mysqli_error($conn);
}

for ($i = 0; $i < 5 and $i < mysqli_num_rows($result); $i++) {
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);
    echo "<div class='post'>";
    echo "<h3>" . $row['name'] . "</h3>";
    echo "<span class='post-text'>" . $row['content'] . "</span>";
    echo "</div>";
}


?>
</html>