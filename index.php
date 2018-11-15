<!DOCTYPE html>
<html>
<?php include('header.php') ?> 
<body>
    <?php
    include("connect.php");

    if (array_key_exists('user', $_SESSION)) {
        echo "Welcome, " . $_SESSION['user'] . "!<br />";
        echo '<a href="logout.php">Logout</a> <br />';
        echo '<a href="profile.php">Your profile</a><br />';
        echo '<a href="post.php">Post something</a>';
    }

    echo "<h1>Posts</h1>";

    $sql = "SELECT * FROM calvin_space.posts ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_error($conn)) {
        echo mysqli_error($conn);
    }

    for ($i = 0; $i < 5 and $i < mysqli_num_rows($result); $i++) {
        mysqli_data_seek($result, $i);
        $row = mysqli_fetch_array($result);
        echo "<div class='post'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<h4>By <a href='view_profile.php?profile=" . $row['user'] . "'>" . $row['user'] . "</a></h4>";
        echo "<span class='post-text'>" . $row['content'] . "</span>";
        echo "</div>";
    }
    echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
    ?>
</body>
</html>