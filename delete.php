<?php

include './SQLConnect.php';
error_reporting(0);
$rolleno = $_GET['rn'];
$query = "DELETE FROM users WHERE id='$rolleno'";
$dat = mysqli_query($connect, $query);
if ($dat) {
    echo '<font color="green"> Benutzer wurde gelöscht';
} else {
    echo '<font color="red"> Fehler bei Benutzer löschung';
}
?>
