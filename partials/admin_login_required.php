<?php
if(! ($_SESSION["auth_status"] == true && $_SESSION["level"] = "admin"))
{
    set_message("please login to continue");
    header("location: /dsw_proj/auth/loginAdmin.php");
    die;
}
?>