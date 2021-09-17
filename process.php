<?php

// $_FILES[]
if (strlen($_FILES["file"]["name"]) > 0){

    $name = $_FILES["file"]["name"];
    $tmp_address = $_FILES["file"]["tmp_name"];

    if(move_uploaded_file($tmp_address, "upload/".time()."_".$name )) {
        echo "File uploaded successfully";
    } else {
        echo "Error";
    } 

} else {
    echo "No File selected";
}

 


?>