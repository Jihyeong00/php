<?php
    session_start();
    unset($_SESSION["userId"]);
    header("Location:13-4.php")
?>