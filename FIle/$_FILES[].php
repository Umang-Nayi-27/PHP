 <!-- How $_FILES[] stores data ?? -->

<?php
    $filename = $_FILES["fileToUpload"];

    foreach($filename as $key=>$value){
        echo $key." => ".$value."</br>";
    }

    // OUTPUT::
        // name => avt1.png
        // type =>  image/png
        // tmp_name => C:\xampp\tmp\php570.tmp
        // error => 0
        // size => 334097

    //---> so $_FILE[]   stores this innfor in form of array ... when we use it....
?>


<?php

    echo "-----------------------------------------------------------------------------------------------"."<br>";
    $filename = $_FILES["fileToUpload"]["name"];
    // this 2 dimentional array of file.... first get the array of selected file......and then... fetch the data of given key..
    // here "name" is key... so variable will store the name of file
    echo $filename."<br>";


    $filetype = $_FILES["fileToUpload"]["type"];
    echo $filetype."<br>";

    $file_tmp_name = $_FILES["fileToUpload"]["tmp_name"];
    echo $file_tmp_name."<br>";

    $filesize = $_FILES["fileToUpload"]["size"];
    echo $filesize."<br>";
?>