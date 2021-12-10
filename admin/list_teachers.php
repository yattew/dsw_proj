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
    <title>Teacher Data</title>
</head>

<body style='background-image: url("assets/jaypee.jpg"); background-size: 100%; background-attachment: fixed;'>
<div id="navbar">
        <div id="title">
            <h3>MiniKiosk</h3><small> <a href="index.php"> Admin Panel </a></small>
        </div>
        <div id="nav-items">
            <div class="nav-item"><a href="/dsw_proj/auth/logout.php">Logout</a></div>
        </div>
    </div>
<div id="table-wrapper">
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                NAME
            </th>
            <th>
                PHONE NO.
            </th>
            <th>
                DEPT
            </th>
            <th>
                EDIT
            </th>
        </tr>
        <?php
        $sql = "select id,name,phno,dept from faculty";
        $teachers = mysqli_query($conn, $sql);
        foreach ($teachers as $teacher) {
            echo '<tr>';
            foreach ($teacher as $key => $val) {
                echo "<td>$val</td>";
            }
            $id = $teacher["id"];
            echo "<td><form action='update_teacher.php'>
                <input type='number' name='id' id='id' hidden value='$id'>
                <input type='submit' value='Edit'>
                </form></td>";
            echo '</tr>';
        }
        ?>
    </table>
    <div id="credStat"><?php
                        if (has_messages()) {
                            echo "<div id='errors'>";
                            show_messages();
                            delete_messages();
                            echo "</div>";
                        }
                        ?></div>
</body>

</html>