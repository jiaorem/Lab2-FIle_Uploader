<?php
// Build the file location/path
$destination = "C:/xampp/htdocs/uploads/" . $_FILES['userfile']['name'];
// temporary path
$tmp = $_FILES['userfile']['tmp_name'];
// verify if the file is uploaded or not
if (is_uploaded_file($tmp)) {
// move the file to target destination
    if (move_uploaded_file($tmp, $destination)) {
        echo 'File is successfully uploaded';
        exit();
    }
}
echo 'Unable to upload file';