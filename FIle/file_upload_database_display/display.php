    <?php
        $connection = mysqli_connect("localhost","root","","demo");
        if($connection){
            echo "connected";
        }
        else{
            die(mysqli_connect_errno());
        }

        $result = mysqli_query($connection,"SELECT `path` FROM `img` WHERE `path`='upload/p4.png'");
        $row = mysqli_fetch_assoc($result);
        $path = $row["path"];
        echo $path;
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display img from Database</title>
    </head>
    <body>
        <h1>Display IMAGE from Database</h1>
        <img src="<?php echo $path ?>" alt="" height="100%" width="100%">
        
    </body>
    </html>