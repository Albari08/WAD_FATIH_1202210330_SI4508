<?php
$targetDirectory = "assets/images/"; // Change this to your desired directory
$targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

$check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }

if ($uploadOk == 1) {
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    // if everything is ok, try to upload file
} else {
    echo "Sorry, there was an error uploading your file.";
}

?>