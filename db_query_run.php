<?php

    //connection established
    $connection = mysqli_connect("localhost","root","","demo");

    if(!$connection){
        die("not connected".mysqli_connect_error());
    }
    else{
        echo "connected successfully"."<br>";
    }

    // run query

    $result = mysqli_query($connection,"INSERT INTO `demo_tbl`(`name`, `number`, `gender`, `email`) VALUES ('RAM2','12345890','MALE','XYZ@gmail.com')" );

    //check query run or not

    if($result)
    {
        echo "query run successfully";
    }
    else{
        echo "this error occured".mysqli_error($connection);
    }
?>
