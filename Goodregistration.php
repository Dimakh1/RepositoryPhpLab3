<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Acess </title>
</head>
<body bgcolor=orange>

    <?php require 'C:\OSPanel\domains\phplaba3\Registration.php'; 
    $userName = $_COOKIE['userName'];
    ?>
    <center>
        <?php
        if ($userName == null) 
        {
            header("Location: Registration.php");
        } else {
            echo " ", $userName;
        }
        ?>
    You registred succesefully!
        <p><b><a href="Exit.php" style="color:black; text-decoration:none"> Exit </a></b></p>
    </center>
    </form>
</body>
</html>