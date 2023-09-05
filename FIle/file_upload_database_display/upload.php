<?php
$connection = mysqli_connect("localhost","root","","demo");

if($connection){
    echo "connected";
}
else{
    die(mysqli_connect_errno());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_FILES["fileToUpload"]))     // load selected file... so will load asscoiative array., first temp location per store kere...
    {
        $targetDirectory = "upload/";
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);         //==> upload/xyz.png


        // move_uploaded_file(temp_storage_file_location , "permenent_storage_location" )
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile))           
        {        
            echo "The file has been uploaded.";
            $result = mysqli_query($connection,"INSERT INTO `img`(`path`) VALUES ('$targetFile')");
            echo "<script>window.location.href='display.php'</script>";
        } 
        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>


