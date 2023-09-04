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
