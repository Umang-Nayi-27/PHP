<?php
$connect = mysqli_connect("localhost","root","","umang");
    if($connect->connect_error){
        die("connection Failed". $connect->connect_error);
    }
    else {
        echo 'Step1-> Connection established';
    }
    
   
    
?>


