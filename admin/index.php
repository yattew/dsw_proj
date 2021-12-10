<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/sql_connect.php";
include "../partials/admin_login_required.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/admin.css">
    <title>Admin Panel | MiniKiosk</title>
</head>

<body style='background-image: url("assets/jaypee.jpg"); background-size: 100%;'>
    <div id="navbar">
        <div id="title">
            <h3>MiniKiosk</h3><small> <a href="index.php"> Admin Panel </a></small>
        </div>
        <div id="nav-items">
            <div class="nav-item"><a href="/dsw_proj/auth/logout.php">Logout</a></div>
        </div>
    </div>
    <div id="profile-wrapper">
        <form action="add_student.php" method="get">
            <input type="submit" value="Add Student">
        </form>
        <form action="add_teacher.php" method="get">
            <input type="submit" value="Add Teacher">
        </form>
        <form action="list_students.php" method="get">
            <input type="submit" value="View/Edit Existing Student Data">
        </form>
        <form action="list_teachers.php" method="get">
            <input type="submit" value="View/Edit Existing Teacher Data">
        </form>

    </div>
</body>

</html>