<?php
if (array_key_exists('profile', $_GET)) {
    $profile = $_GET['profile'];
} else {
    $profile = "";
}

include("connect.php");
include("header.php");

$sql = "SELECT * FROM calvin_space.profiles WHERE user='$profile'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 0) {
    echo "<h1>" . mysqli_fetch_array($result)['user'] . "'s Profile</h1>";
    mysqli_data_seek($result, 0);
    echo mysqli_fetch_array($result)['content'];
    echo '<h2 style="text-align: left;">Posts</h2>';
    $sql = "SELECT * FROM calvin_space.posts WHERE user='$profile' ORDER BY id DESC";
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
} else {
    echo "That profile does not exist<br />";
    echo '<a href="profile_search.php">Search again</a>';
}

echo '<br /><a href="index.php">Home</a><br />';
echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
?>