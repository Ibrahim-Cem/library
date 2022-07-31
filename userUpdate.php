<?php
    require "config/db.php";
    $query= $db->prepare("UPDATE users SET
    passW = ?
    WHERE userName = 'ibrahimCem'
    ");
    $update= $query->execute(array(md5("1234")));
    if($update){
        echo "Successfully changed password";
    }
?>