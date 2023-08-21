<?php
    session_start();

    if(!isset($_SESSION["names"])){
        echo "<script> window.location.href='index.php'; </script>";
    }
    else{
    if(isset($_REQUEST["logout"])){
        session_unset();
        session_destroy();
        echo "<script> window.location.href='index.php'; </script>";
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
    <?php
    echo $_SESSION["names"];
    ?>

    <form action="">
    <button type="submit" name="logout"> Logout </button>
    </form>
</body>
</html>