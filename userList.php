<?php
    require "config/db.php";
    $query = $db->query("SELECT * FROM users WHERE userName = 'ibrahimCem'");
    if ($query->rowCount()){
        foreach($query as $row){
            echo $row['userName']." ". $row['name']."<br>";
        }
    }
?>