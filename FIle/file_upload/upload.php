<?php
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
        } 
        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>


<!-- 
1. use $_file function and store file in temp...
2. move file, which is in temp to...... its Main location using move_uploaded_file("temp","main") 
-->


// MULTIPLE FILE UPLOAD
/*
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["fileToUpload"])) {
        $targetDirectory = "upload/";
        
        // Loop through the array of uploaded files
        $count = count($_FILES["fileToUpload"]["name"]);
        for ($i = 0; $i < $count; $i++) {
            $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"][$i]);
            
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $targetFile)) {
                echo "The file " . $_FILES["fileToUpload"]["name"][$i] . " has been uploaded.<br>";
            } else {
                echo "Sorry, there was an error uploading your file " . $_FILES["fileToUpload"]["name"][$i] . ".<br>";
            }
        }
    }
}
?>

*/
