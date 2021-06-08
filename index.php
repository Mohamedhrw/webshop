<?php
include './SQLConnect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>users register</title>
        <link rel="stylesheet" type="text/css" href="RigesterCSS.css">
    </head>
    <body style="background-color: white">
        <?php

        function checkUsername($username) {
            global $connect;
            $quere = "select username from users";
            $result = mysqli_query($connect, $quere);
            if (!$quere) {
                die("error in quere");
            }
            while ($row = mysqli_fetch_assoc($result)) {
                if ($username == $row['username']) {
                    return FALSE;
                }
            }
            return TRUE;
        }
        ?>

        <?PHP
        if (isset($_POST['submit'])) {
            $vorname = $_POST['vorname'];
            $nachname = $_POST['nachname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $repeatPassword = $_POST['repeatPassword'];
            $checkUsername = checkUsername($username);

            if ($checkUsername) {
                if ($password == $repeatPassword) {
                    $quere = "insert into users(vorname,nachname,username,password)values('" . $vorname . "','" . $nachname . "','" . $username . "','" . $password . "')";
                    $result = mysqli_query($connect, $quere);
                    if ($result) {
                        echo 'you are  registed';
                    } else {
                        echo 'error in register';
                    }
                } else {
                    echo 'the both passwords are not some';
                }
            } else {
                echo 'please take either username';
            }
        }
        ?>

        <form action="" method="POST">
            <h1>Register</h1>
            <p>
                <input placeholder="Vorname" type="text" name="vorname">
            </p>
            <p>
                <input placeholder="Nachname" type="text" name="nachname">
            </p>
            <p>
                <input placeholder="Handy Numer" type="text" name="handynumer">
            </p>
            <p>
                <input  placeholder="Username" type="text" name="username">
            </p>
            <p>
                <input placeholder="Passwort" type="password" name="password">
            </p>
            <p>
                <input placeholder="Passwort wiederholen" type="password" name="repeatPassword"></br>
            </p>
            <p>
                <input type="submit" name="submit" value="registrieren">
            </p>


        </form>
        <?php
        mysqli_close($connect);
        ?>
    </body>
</html>
