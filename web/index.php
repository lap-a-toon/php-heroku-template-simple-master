<?php
session_start();
$author_data = file_exists('author.php') ? include_once('author.php') : "";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?=$author_data;?>
<?php 
if(!isset($_SESSION['username'])){
    ?>
    <form action="post.php" method="POST">
        <label for="name">Представьтесь</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Зайти">
    </form>
    <?php
}else{
    ?>
    <h3>Приветствую Вас, <?=$_SESSION['username']?>!</h3>
    <a href="exit.php">Выход</a>
    <?php
}
?>
</body>
</html>
<?php

