<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Registration </title>
    <b><a href="Registration.php" style="color:black; text-decoration:none"> Registration</a></b>
    <p></p>
    <b><a href="Authorization.php" style="color:black; text-decoration:none">  Sgin in </a></b>
</head>
<body bgcolor = orange>
<center><h1> Registration </h1></center>
<form name="interest" method="post">
    <center><p> &#128100; Name:</center>
    <center><p> <input type="text" name=userName placeholder="write your name" size="30" maxlength="50"></input></center>
    <center><p> &#128100; Surname:</center>
    <center><p> <input type="text" name=userSurname placeholder="write your surname" size="30" maxlength="50"></input></center>
    <center>
    <?php
    if (isset($_POST['EventOfRegistration'])) {
        $userName = $_POST['userName'];
        $userSurname = $_POST['userSurname'];
        if ($userName == null || $userSurname == null) {
            echo "Write datas!";
        } else {
            $WorkWithPDO = new PDO('mysql:dbname=php_Dmitrii;host=localhost', 'root', '');
            $Set = "INSERT INTO readers(last_name,first_name) 
            values('$userSurname','$userName')";
            $WorkWithPDO->exec($Set);
            setcookie('userName', $userName, time() + (86400 * 30), '/'); 
            setcookie('userSurname', $userSurname, time() + (86400 * 30), '/');
            header("Location: GOODRegistration.php");
            exit();
        }
    }

    ?>
    </center>

    <center><p><input name = "EventOfRegistration" type="submit" value="Registration"></input></center>

    <pre id="profile"></pre>
</form>
</body>
</html>