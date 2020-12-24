<?php
session_start();
$_SESSION['login'] = $_POST['login'];
$user_name = "admin";
$user_pass = "1111";
$_SESSION['auth']  = false;
if($_POST['login'] == $user_name && $_POST['pass'] == $user_pass) 
{
    $_SESSION['auth'] = true;
}
else {
    echo "Something went wrong.";} 
header('Location: restricted.php'); 
exit;
?>