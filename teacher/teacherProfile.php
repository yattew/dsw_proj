<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/student_login_required.php"
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/teacher.css">
    <title>Faculty Dashboard | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
    <?php include "../partials/navbarTeacher.php"  ?>
    <div id="container">
        <h3>PROFILE</h3>
        <div id="profile-wrapper">
            <small>Status: Logged in</small>
            <table>
                <tr>
                    <th>Name</th>
                    <td>Arpit Jain</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>9818981898</td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>CSE</td>
                </tr>
        </div>
        </table>
    </div>
</body>