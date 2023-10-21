<?php 
$image = $_POST['image'];
//Stores the filename as it was on the client computer.
$imagename = $_FILES['image']['name'];
//Stores the filetype e.g image/jpeg
$imagetype = $_FILES['image']['type'];
//Stores any error codes from the upload.
$imageerror = $_FILES['image']['error'];
//Stores the tempname as it is given by the host when uploaded.
$imagetemp = $_FILES['image']['tmp_name'];

//The path you wish to upload the image to
$imagePath = "assets/images/";

if(is_uploaded_file($imagetemp)) {
    if(move_uploaded_file($imagetemp, $imagePath . $imagename)) {
        echo "Sussecfully uploaded your image.";
    }
    else {
        echo "Failed to move your image.";
    }
}
else {
    echo "Failed to upload your image.";
}
?>