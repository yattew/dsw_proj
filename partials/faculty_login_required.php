<?php
if(! ($_SESSION["auth_status"] == true && $_SESSION["level"] = "faculty"))
{
    set_message("please login to continue");
    header("location: /dsw_proj/auth/loginTeacher.php");
    die;
}
?>