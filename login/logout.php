<?php
session_start();
unset($_SESSION['centerid']);


header("Location: index.php");
exit;
?>