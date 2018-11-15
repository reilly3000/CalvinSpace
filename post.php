<?php include("header.php"); ?>
<h1>Post something</h1>
<form action="post_parse.php" method="get" id="form">
    Post name
    <br />
    <input type="text" name="name">
    <br />
    Post contents
    <br />
    <textarea form="form" name="content">Enter post contents</textarea>
    <br />
    <input type="submit" value="Post">
</form>
<?php
echo "I am not affiliated with MySpace in any way. CalvinSpace was a combination of an experiment, an educational project for myself and a joke.";
?>