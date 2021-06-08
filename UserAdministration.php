<?php 
include './SQLConnect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Benutzer verwaltung</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
        <link rel="stylesheet" type="text/css" href="ProfileCss.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <?PHP
        global $connect;
        $quere="select * from users";
        $result= mysqli_query($connect, $quere);
        if(!$quere){
        die("error in quere");
        }
        ?>
         <form id="suchen">
            <label>Suchen</label>
            <input type="text" name="suchen">          
            <label>Nutzer einfügen</label>
            <button type="button">Einfügen</button>
            <label for="sort">sortieren nach:</label>
            <select name="sort" id="sort">
                <option value="ID">ID</option>
                <option value="Vorname">Vorname</option>
                <option value="Nachname">Nachname</option>
                <option value="Benutzername">Username</option>
            </select>
            <button type="button">sort</button>
        </form>
        <form id="tableForm">
        <table>
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Benutzername</th>
                <th>Handy Numer</th>
                <th>Type</th>
                <th>bearbeiten</th>
                <th>lösche</th>
            </tr>
            <?php
            include './SQLConnect.php';
            error_reporting(0);
            $rolleno = $_GET['rn'];
            $query = "DELETE FROM users WHERE id='$rolleno'";
            $dat = mysqli_query($connect, $query);
            if (!$dat) {
                echo '<font color="red"> Fehler bei Benutzer löschung';
            }
            ?>
            <?php
                        global $result;
                        while ($row = mysqli_fetch_assoc($result)) {
                ?> 
            <tr>
                <td><?php echo ''.$row['id'].'';   ?></td>
                <td><?php echo ''.$row['vorname'].'';   ?></td>
                <td><?php echo ''.$row['nachname'].'';   ?></td>
                <td><?php echo ''.$row['username'].'';   ?></td>
                <td><?php echo ''.$row['phoneNumber'].'';   ?></td>
                <td><?php echo ''.$row['usertype'].'';   ?></td>
                <td><a href="edit.php?rn=<?php echo $row["id"]?>"><i class="far fa-edit"></i></td>
                <td><a href="UserAdministration.php?rn=<?php echo $row["id"]?>"><i class="far fa-trash-alt"></i></td>
            </tr>
            <?php
            } 
            
            ?>
            
        </table>
        </form>
    </body>
</html>