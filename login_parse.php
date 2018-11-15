<?php
include("header.php");
?>
<?php
    include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM calvin_space.users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_error($conn)) {
        echo mysqli_error($conn);
    } else if ($result) {
        if (mysqli_num_rows($result) == 0) {
            echo "Try again.<br />";
            echo '<a href="login.php">Login</a><br />';
        } else {
            $_SESSION['user'] = $username;
            echo "Successfully logged in as " . $_SESSION['user'] . ".<br />";
        }
    }

    echo '<a href="index.php">Home</a>';
    echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
?>