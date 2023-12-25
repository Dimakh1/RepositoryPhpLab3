<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Acces </title>
</head>
<body bgcolor= orange>

    <?php require 'C:\OSPanel\domains\phplaba3\Authorization.php'; 
    $userName = CheckCookie();
    ?>
    <center>
        <?php
        if ($userName == null) 
        {
            header("Location: Authorization.php");
        } else {
            echo " ", $userName;
        }
        ?>
        you got authorized succesefully!
        <p><b><a href="Exit.php" style="color:black; text-decoration:none"> Exit </a></b></p>
    </center>
    </form>
</body>
</html>