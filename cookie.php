<?php
    // Step 1 create cookie before HTML tag
    setcookie("test","cookie created",time()+60*60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie creation</title>
</head>
<body>
    <?php
        // Step 2 :: access the cookie by using its name
        echo $_COOKIE["test"];          // --> OUTPUT ::::  this will echo the value of cookie "test" ---> cookie created
    ?>
</body>
</html>
