<?php
$salt = "sflsfdk223403fjls";
$path = "images/".$_FILES['photo']['name']."_sflsfdk223403fjls";
if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
    header("Location: scan.php");
}
    
//print_r($_FILES);