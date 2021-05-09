<?php
session_start();
session_destroy();
header("location:project_i.php");
?>