<?php
if(isset($_POST['name']) && $_POST['username'] !==''){
    session_start();
    $_SESSION['username'] = $_POST['name']; 
}
header('Location: /');