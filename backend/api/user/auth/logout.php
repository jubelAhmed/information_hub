<?php
session_start();
session_destroy();
header("Location:http://localhost/information_hub/index.php");
?>