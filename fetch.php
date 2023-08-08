<?php
    $queries ="SELECT Qname FROM qualification";
    $result = $connect->queries($query);
    if($result->num_rows= 0){
      echo "fetched";
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else{
        echo"not fetchedd";
    }
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

