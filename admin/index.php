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
    <div id="title"><h3>MiniKiosk</h3><small>Admin Panel</small></div>
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
    </div>
</body>
</html>