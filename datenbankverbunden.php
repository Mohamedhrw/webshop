<?php



   $datenbank = 'produkt';
   // Servername
   $servername = '127.0.0.1';
   // Benutzername
   $username = 'root';
   // Passwort
   $password = '';
   // Datenbankname
       $dbname = 'webshop';

   //Verbindung zur Datenbank wird erstellt
   $db = mysqli_connect($servername, $username, $password, $dbname);
   // Verbindung wird überprüft
   if (!$db) {
       die("Connection failed: " . mysqli_connect_error());
     }else{
       echo "datebase is konnected";
     }
     ?>
