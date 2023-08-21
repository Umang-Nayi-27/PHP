<?php
// Step 1 start the session
session_start();

//step 2 get the value in session variable $_SESSION["var"]  ---> for that first we have to check that is input filed is set or not !!!
//--> data form mathi levana session ma store keravana.. check kervanu input field set che k nai pachi
if (!isset($_SESSION["names"])) {
    if (isset($_REQUEST["btn"]) && !empty($_REQUEST["name"])) {
        $namef = $_POST["name"];
        $_SESSION["names"] = $namef;
        echo "<script> window.location.href='DATA.php'; </script>";
    }
}
else{
    echo "<script> window.location.href='DATA.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie creation</title>
</head>

<body>
    <form action="" method="post">
        <label>Name :</label>
        <input type="text" placeholder="username" name="name">
        <button type="submit" value="submit" name="btn"></button>
    </form>
</body>

</html>