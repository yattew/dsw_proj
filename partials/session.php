<?php
session_start();
if(isset($_SESSION["enroll"]))
{
    $_SESSION["enroll"] == false;
}
if(isset($_SESSION["auth_status"]))
{
    $_SESSION["auth_status"] == false;
}
?>