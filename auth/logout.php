<?php
include "../partials/session.php";
include "../partials/messages.php";
$level = $_SESSION["level"];
$_SESSION["auth_status"] = false;
$_SESSION["level"] = NULL;
$_SESSION["enroll"] = false;
set_message("you are now logged out");
header("location: loginStudent.php");
?>
