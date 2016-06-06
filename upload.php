<?php

if(!empty($_POST))
{
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["team-logo1"]["name"]);
    $file_extension = end($temporary);
    
    $temporary2 = explode(".", $_FILES["team-logo2"]["name"]);
    $file_extension2 = end($temporary2);
    
    $temporary3 = explode(".", $_FILES["picture"]["name"]);
    $file_extension3 = end($temporary3);

    if ((($_FILES["team-logo1"]["type"] == "image/png") || ($_FILES["team-logo1"]["type"] == "image/jpg") || ($_FILES["team-logo1"]["type"] == "image/jpeg" && $_FILES["team-logo2"]["type"] == "image/png") || ($_FILES["team-logo2"]["type"] == "image/jpg") || ($_FILES["team-logo2"]["type"] == "image/jpeg")
    ) && ($_FILES["team-logo1"]["size"] < 5000000) && ($_FILES["team-logo2"]["size"] < 5000000)
    && in_array($file_extension, $validextensions, $file_extension2)) {

    if ($_FILES["team-logo1"]["error"] > 0 && $_FILES["team-logo2"]["error"] > 0) {
    echo "Return Code: " . $_FILES["team-logo1"]["error"] . "<br/>" . $_FILES["team-logo1"]["error"] . "<br/>";
    } else {

    if (file_exists("upload/" . $_FILES["team-logo1"]["name"]) || file_exists("upload/" . $_FILES["team-logo2"]["name"])) {
        echo $_FILES["team-logo1"]["name"] . "or" . $_FILES["team-logo2"]["name"] ." <b>already exists.</b> ";
    } else {
    move_uploaded_file($_FILES["team-logo1"]["tmp_name"], "uploads/" . $_FILES["team-logo1"]["name"]);
    move_uploaded_file($_FILES["team-logo2"]["tmp_name"], "uploads/" . $_FILES["team-logo2"]["name"]);
    }
    }
    }
}
?>