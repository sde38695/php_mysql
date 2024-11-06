
<?php
//nested loops
//for($i=1; $i<5; $i++){
   // for($j=1; $j<=$i; $j++){
   //     echo "*"
    //}
//    echo "<br/>";
//}

//for($i=1; $i<5; $i++){
  //  for($j=$i; $j=<5; $j++){
     //   echo "&nbsp"; //prints a blank space
    //}
   // for($j =1; $j <=$i; $j++){
    //    echo " * "
    //}
    //echo "<br/>";

    //Associative Arrays

    $grade = array(
        "Math" => "3"
        "Art" => "5"
        "History" => "4"
        "Music" => "4"
    );

    echo "Math grade is".$grade['Math'];

    foreach($grade as $subject => $grade){
        echo "Subject: " .$subject .  " / Grade: ".$grade;
        echo "<br>";
    }

    
?>