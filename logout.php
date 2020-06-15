<?php

session_start();
session_destroy();
header('location:registration.php');
/*if (session_destroy()) {
header("Location: registration.php");
}
?>
<?php
include 'welcome.php';*/
?>
