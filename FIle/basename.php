<?php
    //syntax :::: basename(path, suffix);


    $path = "/var/www/html/index.html";
    $fullfilename = basename($path);
    echo $fullfilename."<br>";
            //OUTPUT ::->  index.html
    $filename = basename($path,".html");
    echo $filename; 
            //OUTPUT ::-> index

    //baseame::: function automatically travese till the last "/" of string .... and at last "/" it will remove all traversed part...so basically it will gave us just file name
    // and suffix ::: will remove the extension of the full file name

?>

