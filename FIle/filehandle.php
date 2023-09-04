<?php
//1./////////////////// readfile()
//$var = readfile("filehandle.txt");      // already exist file ne only read kerva...without open file

//2.////////////////// fopen("filename","operation")

        //operation :: --> r , w , a , x , r+ , w+ , a+ ,x+
        $create = fopen("createfile.txt","x");  // x will create file ad then give write  permission
        echo "<br>";
    

    //[a]/////////////////////////////////  fwrite( $fileopen )

         // file ni ek line read kerva mate thay che.... pointer automatic move thay. 
            
         echo fwrite($create,"This is new created file ......");
         fclose($create);
         echo "<br>";
    

    //[b]/////////////////////////////////  fread($fileopen,filefunnction())

        //fread("filehandle.txt",filetype("filehandle.txt"));      error-sol --> fopen kerya vagar fread na thay... book open kerya vagar read thodi thay... direct read kerva...readfile vapray..

            $file = fopen("createfile.txt","r"); //// Give only read permission..  
            echo fread($file,filesize("createfile.txt"));
            echo "<br>";

        //echo fread($file);       error-sol --> fread() ma 2 parameter leva pade.... first fopen vadu..2nd file ne related function


    //[c]/////////////////////////////////  fgets( $fileopen )

         // file ni ek line read kerva mate thay che.... pointer automatic move thay. 
    
            echo fgets($file);      //in this output will not given as file already read and the pointer is at the end of the file
            echo "<br>";

    //[d]/////////////////////////////////  fgetc( $fileopen )

         // file no first character read kerva mate vapray che...... pointer automatic move thay. 
    
            echo fgetc($file);      //in this output will not given as file already read and the pointer is at the end of the file
            echo "<br>";

    //[e]/////////////////////////////////  feof( $fileopen ) ::-> file end of file

            echo feof($file);   // output will be in value of 0 or 1.
                // output :: 1 means --> file is ended
                //           0 means --> file is not eded
                echo "<br>";

    //[f]/////////////////////////////////  fclose( $fileopen )

            echo fclose($file); // output will be in value of 0 or 1.
                // output :: 1 means --> file is closed
                //           0 means --> file is not closed.. error occured

?>