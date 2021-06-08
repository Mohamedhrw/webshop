<?php
include './SQLConnect.php';
?>
<?php

function isRegisted($username, $password) {
    global $connect;
    $quere = "select username,password from users";
    $result = mysqli_query($connect, $quere);
    if (!$quere) {
        die("error in quere");
    }
    while ($row = mysqli_fetch_assoc($result)) {
        if ($username === $row['username']) {
            if ($password === $row['password']) {
                return true;
            }
        }
    }
    return false;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="RigesterCSS.css">
    </head>
    <body style="background-color: white">
        <?PHP
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $var = isRegisted($username, $password);
            if ($var) {
                echo 'welcome back ';
            } else {
                echo 'username or password is not correct ';
            }
        }
        ?>


        <form action="" method="POST">
            <h1>Anmelden</h1>
            <p>
                <input placeholder="Username" type="text" name="username">
            </p>
            <p>
                <input placeholder="Passwort" type="password" name="password">
            </p>
            <p>
                <input type="submit" name="submit" value="anmelden">
                </br>
                <a href="index.php" class="button--style-red">Haben Sie das Passwort vergessen?</a> 
            </p>
            <p>
                <label>wenn Sie noch keine Konto haben, klicken Sie bitte </label>
                <a href="index.php" class="button--style-red">Hier!</a> 
            </p>
        </form>

    </body>
</html>
<?php
mysqli_close($connect);
?>
