<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Authorization </title>
    <b><a href="Registration.php" style="color:black; text-decoration:none">  Registration </a></b>
    <p></p>
    <b><a href="Authorization.php" style="color:black; text-decoration:none">  Authorization </a></b>
</head>
<body bgcolor = orange>
<center><h1> Authorization </h1></center>
<form name="interest" method="POST">
    <center><p> &#128100; Name:</center>
    <center><p> <input type="text" name=userName placeholder="write your name" size="30" maxlength="50"></input></center>
    <center><p> &#128100; Surname:</center>
    <center><p> <input type="text" name=userSurname placeholder="write your surname" size="30" maxlength="50"></input></center>
    <center>
    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'php_Dmitrii'); 
    if (isset($_POST['EventOfAuthorization'])) 
    {
        $userName = $_POST['userName'];
        $userSurname = $_POST['userSurname'];
        if ($userName == null || $userSurname == null)
        {
            echo "Write datas!";
        } else {
            if (authorizationCheck($userName, $userSurname)) 
            {
                setcookie('userName', $userName, time() + (86400 * 30), '/'); 
                setcookie('userSurname', $userSurname, time() + (86400 * 30), '/');
                header("Location: Goodauthorization.php"); 
                exit();
            } else {
                echo "Datas incorrect!";
            }
        }
    }
    function CheckCookie() 
    {
        $OriginalUserName = $_COOKIE['userName'];
        $OriginalUserSurname = $_COOKIE['userSurname'];
        if (authorizationCheck($OriginalUserName, $OriginalUserSurname)) {
            return $OriginalUserName;
        }
        return null;
    }
    function authorizationCheck($userName, $userSurname) 
    {
        $connect = mysqli_connect('localhost', 'root', '', 'php_Dmitrii');
        $Set = 'SELECT last_name, first_name
                    FROM readers';
        $readers = mysqli_query($connect, $Set);
        while ($row = $readers->fetch_assoc()) {
            if ($row['first_name'] == $userName && $row['last_name'] == $userSurname) {
                return true;
            }
        }
        return false;
    }
    mysqli_close($connect);
    ?>
    </center>
    <center><p><input name = "EventOfAuthorization" type="submit" value="Authorization"></input></center>
</form>
</body>
</html>