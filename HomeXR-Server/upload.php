<?php
    $FileName=$_FILES['file']['name'];
    $tmpname=$_FILES['file']['tmp_name'];

    move_uploaded_file($tmpname,$FileName);
    echo("File Uploaded successfully.");
?>