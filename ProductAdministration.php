<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "webshop";

$connect = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("Error with database conecte ");
}
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
        $quere = "select * from products";
        $result = mysqli_query($connect, $quere);
        if (!$quere) {
            die("error in quere");
        }
        ?>
        <form id="suchen">
            <input type="text" name="suchen">    
            <button type="button">suchen</button>
            <label>Produkte einfügen</label>
            <button type="button">Einfügen</button>
            <label for="sort">sortieren nach:</label>
            <select name="sort" id="sort">
                <option value="ID">ID</option>
                <option value="Name">Name</option>
                <option value="Preis">Preis</option>
                <option value="Bewertung">Bewertung</option>
            </select>
        </form>
        <form id="tableForm">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Beschreibung</th>
                    <th>Preis</th>
                    <th>Anzahl im Lager</th>
                    <th>Bewertung</th>
                    <th>bearbeiten</th>
                    <th>löschen</th>
                </tr>
                <?php
                ?>
                <?php
                global $result;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?> 
                    <tr>
                        <td><?php echo '' . $row['productNumer'] . ''; ?></td>
                        <td><?php echo '' . $row['productName'] . ''; ?></td>
                        <td><?php echo '' . $row['productDescribe'] . ''; ?></td>
                        <td><?php echo '' . $row['productPrice'] . ''; ?></td>
                        <td><?php echo '' . $row['productCount'] . ''; ?></td>
                        <td><?php echo '' . $row['evaluation'] . ''; ?></td>
        <!--                <td><a href="login.php?id=<?php echo $row["id"] ?>"><i class="far fa-edit"></i></td>
                        <td><a href="delete.php?id=<?php echo $row["id"] ?>"><i class="far fa-trash-alt"></i></td>-->
                    </tr>
                    <?php
                }
                ?>

            </table>
        </form>
    </body>
</html>