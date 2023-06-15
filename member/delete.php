<?php
$num = $_REQUEST["num"];
$page = $_REQUEST["page"];

require("db_connect.php");
$db->exec("delete from board where num=$num");

header("Location:list.php?page=$page");
?>
