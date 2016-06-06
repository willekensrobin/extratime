<?php

if(!empty($_POST))
{
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["picture"]["name"]);
    $file_extension = end($temporary);

    if ((($_FILES["picture"]["type"] == "image/png") || ($_FILES["picture"]["type"] == "image/jpg") || ($_FILES["picture"]["type"] == "image/jpeg")
    ) && ($_FILES["picture"]["size"] < 5000000)
    && in_array($file_extension, $validextensions)) {

    if ($_FILES["picture"]["error"] > 0) {
    echo "Return Code: " . $_FILES["picture"]["error"] . "<br/>" . $_FILES["picture"]["error"] . "<br/>";
    } else {

    if (file_exists("upload/" . $_FILES["picture"]["name"])) {
        echo $_FILES["picture"]["name"] ." <b>already exists.</b> ";
    } else {
    move_uploaded_file($_FILES["picture"]["tmp_name"], "uploads/" . $_FILES["picture"]["name"]);
    }
    }
    }
}
?>