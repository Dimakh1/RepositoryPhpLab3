<?php
if (isset($_COOKIE)) 
{
    $userName = $_POST['userName'];
    $userSurname = $_POST['userSurname'];

    setcookie('userName', $userName, -10, '/');
    setcookie('userSurname', $userSurname, -10, '/');
    header("Location: Authorization.php");
}
?>