<?php
    require("config/user.php");

    $u = new user();
    $u->isSession();

    echo $_SESSION['userName'];

?>