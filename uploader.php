<?php
$tmp = $_FILES['userfile']['tmp_name'];
$destination = "D:/xampp/htdocs/file-upload/" . $_FILES['userfile']['name'];

if (is_uploaded_file($tmp)){
    if (move_uploaded_file($tmp, $destination)){
        echo 'File has been uploaded';
        exit();
    }
}
echo 'Unable to upload the file';
?>
