<!DOCTYPE html>
<html>
    <head>
        <title>bearbeiten</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
        <link rel="stylesheet" type="text/css" href="RigesterCSS.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <?php
include './SQLConnect.php';
error_reporting(0);
$rolleno=$_GET['rn'];
$query="SELECT * FROM users WHERE id='$rolleno'";
$userDate= mysqli_query($connect, $query);
if($userDate){
     while ($row = mysqli_fetch_assoc($userDate)) {
         $vName=$row['vorname'];
         $nName=$row['nachname'];
         $hNumer=$row['phoneNumber'];
         $uName=$row['username'];
         $uType=$row['usertype'];
    }
}else{
    echo '<font color="red"> Fehler bei Benutzer löschung';
}
?>
    
    <?php
        include './SQLConnect.php';
        $rolleno=$_GET['rn'];
         if(isset($_POST['update'])){
            $vorName=$_POST['vorname'];
            $nachName=$_POST['nachname'];
            $userName=$_POST['username'];
            $phoneNumber=$_POST['handynumer'];
            $userType=$_POST['usertype'];
       $queree="UPDATE users SET vorname = '".$vorName."' ,phoneNumber = '".$phoneNumber."',nachname = '".$nachName."',
              username = '".$userName."',usertype = '".$userType."'  WHERE id='$rolleno'";
       $userUpdate= mysqli_query($connect, $queree);
       if(!$queree){
           die("Fehler bei Bearbeitung");
       }
         }
    ?>
    <body>
         <form action="" method="POST">
                <h1>Benutzer bearbeiten</h1>
                <p>
                    <input  value="<?php echo $vName ?>" type="text" name="vorname">
                </p>
                <p>
                    <input value="<?php echo $nName ?>" type="text" name="nachname">
                </p>
                <p>
                    <input value="<?php echo $hNumer ?>" type="text" name="handynumer">
                </p>
                <p>
                    <input  value="<?php echo $uName ?>" type="text" name="username">
                </p>
                 <p>
                    <input  value="<?php echo $uType ?>" type="text" name="usertype">
                </p>
                <p>
                    <input type="submit" name="update" value="update speichern">
                </p>
            
            
        </form>
    </body>
