<?php

//connection established

$connection = mysqli_connect("localhost", "root", "", "demo");

if (!$connection) {
    die("not connected" . mysqli_connect_error());
} else {
    echo "connected successfully" . "<br>";
}
//form-validation ..... now check all feild of form are filled or not
if (isset($_GET["submit"]))                  // [] bracket vaprya, ()  na vapray . . . .
{

    // run query

    $result = mysqli_query($connection, "SELECT `name` FROM `demo_tbl` ");   // demo_tbl(`name`,`number`,`gender`,`email`) na vapray.....


    //check query run or not

        if ($result) {
            $data = array(); // Create an array to store all the rows

            
                //mysqli_fetch_assoc() fetches one row at a time
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row; 
            }
             $num_row = mysqli_num_rows($result);

             for($i=0; $i<$num_row ;$i++)
             {
                foreach ($data[$i] as $key => $value) {
                    echo " $value<br>";
                }
             }
        } else {
            echo "this error occured" . mysqli_error($connection);
        }
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
        <button type="submit" name="submit"> Submit</button>
    </form>
</body>

</html>
