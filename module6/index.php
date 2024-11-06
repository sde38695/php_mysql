<?php
//1. Write to a file isong  'fopen', 'fwrite', 'fclose'

function writeToFile($message){
    //Open the file in 'a' mode
    $file = fopen("example.txt", "a");

    //Check if the file was succesfully opened
    if($file){
        //Write the message to the file
        fwrite($file, $message.PHP_EOL);

        //Close the file
        fclose($file);

        echo "Message written to the file succesfully!<br/>";
    }else{
        echo "Failed to open the file for writting!!!<br/";
    }
}

// 2. Read from a file using 'fopen', 'fread', 'foef' and 'fclose'

function readFromFile(){
    //Open the file 
    fopen("example.txt", "r");

    //check if the file was opened succesfully
    if($file){
        echo "<strong>content of the example.txt</strong><br>"

        //read from the file until the end (eof)
        while(!feof($file)){
            $line = fgets($file);
            echo $line. "<br>";
        }
    }else{
        echo "Failed to open the file for reading!!!<br/>";
    }
}
// 3. Write single lines using file_put_contents
function quickWrite($message){
    file_put_contents("example.txt", $message.PHP_EOL);
    echo "Message written to file using file_put_contents!<br/>"

}



writeToFile("This is sample log message!!");
readFromFile();
quickWrite("This will overwrite everything with a new message");
?>