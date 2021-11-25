<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/student_login_required.php"
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/student.css">
    <title>Student Dashboard | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
    <?php include "../partials/navbarStudent.php"  ?>
    <div id="container">
        <h3>PROFILE</h3>
        <div id="profile-wrapper">
            <?php
            if(has_messages())
            {
                $messages = get_messages();
                foreach($messages as $message)
                {
                    echo "<small>$message</small>";
                }
                delete_messages();
            }
            ?>
            <table>
                <tr>
                    <th>Name</th>
                    <td>Arpit Jain</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>23 October 2001</td>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td>3rd</td>
                </tr>
                <tr>
                    <th>Batch</th>
                    <td>B2</td>
                </tr>
                <tr>
                    <th>Course</th>
                    <td>Computer Science</td>
                </tr>
        </div>
        </table>
    </div>
</body>