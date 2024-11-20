<?php
try{
    //Connect to the database
    $pdo = new PDO("mysql:host=localhost;dbname=db", "root", "");

      //Table alteration SQL
      $sql = "ALTER TABLE users DROP COLUMN email VARCHAR(255)";

      //Execute the statement
      $pdo -> exec($sql);

      echo "Column deleted succesfully!!";
}catch(PDOException $e){
    echo "Error deleted column: ".$e->getmessage();
}
 ?>