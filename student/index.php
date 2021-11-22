<!-- <?php
include "../partials/session.php";
include "../partials/messages.php";
if(has_messages())
{
    show_messages();
    delete_messages();
}
?> -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/student.css">
    <title>Student Dashboard | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
<div id="navbar">
    <h3>MiniKiosk</h3>
    <div id="nav-items">
        <div class="nav-item"> <a href="studentProfile.php">Profile</a></div>
        <div class="nav-item"><a href="#">Timetable</a></div>
        <div class="nav-item"><a href="#">Attendance</a></div>
        <div class="nav-item"><a href="#">Result</a></div>
        <div class="nav-item"><a href="#">Logout</a></div>
    </div>
</div>
</body>