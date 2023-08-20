<?php

    //connection established
    $connection = mysqli_connect("localhost","root","","demo");

    if(!$connection){
        die("not connected".mysqli_connect_error());
    }
    else{
        echo "connected successfully";
    }

?>
