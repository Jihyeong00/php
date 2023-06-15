<?php
    setcookie("userId", "kim", time() + 60 * 60 * 2);
    header("Location:13-1.php")
?>