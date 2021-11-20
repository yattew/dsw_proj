<?php
include "../partials/session.php";
include "../partials/messages.php";
if(has_messages())
{
    show_messages();
    delete_messages();
}
?>