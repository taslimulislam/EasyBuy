<?php 
session_start();
session_destroy();
header('Location: ../adminLogin/create.php');

?>