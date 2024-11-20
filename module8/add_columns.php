 <?php
try{
    //Connect to the database
    $pdo = new PDO("mysql:host=localhost;dbname=db", "root", "");

      //Table alteration SQL
      $sql = "ALTER TABLE users ADD email VARCHAR(255)";

      //Execute the statement
      $pdo -> exec($sql);

      echo "Column created succesfully!!";
}catch(PDOException $e){
    echo "Error creating column: ".$e->getmessage();
}
 ?>