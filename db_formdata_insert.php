<?php

//connection established

    $connection = mysqli_connect("localhost","root","","demo");

    if(!$connection){
        die("not connected".mysqli_connect_error());
    }
    else{
        echo "connected successfully"."<br>";
    }
// now check all feild of form are filled or not
    if(isset($_GET["submit"]))                  // [] bracket vaprya ()  na vapray . . . .
    {
        $name = $_GET["name"];
        $number = $_GET["number"];
        $gender = $_GET["gender"];
        $email = $_GET["email"];
    }

// run query

    $result = mysqli_query($connection,"INSERT INTO `demo_tbl` VALUES (' $name','$number','$gender','$email')" );   // demo_tbl(`name`,`number`,`gender`,`email`) na vapray.....

//check query run or not

    if($result)
    {
        echo "<script> alert(`Data inserted`); </script>";  // alert() ni andar  `` vaprvi... ""  error aavse
        //echo ni andar " html tag "  "<script> </script> " aa rite vaprya che....
    }
    else{
        echo "this error occured".mysqli_error($connection);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" name="name" required placeholder="Name">
    <input type="text" name="number" required placeholder="Number">
    <input type="text" name="gender" required placeholder="gender">
    <input type="text" name="email" required placeholder="email">
    <button type="submit" name="submit"> Submit</button>
    </form>
</body>
</html>
