<?php

session_start();

session_unset($_SESSION["email"]);

header("location: login.php?m=3");


?>