<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/sql_connect.php";
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $semester = $_POST["semester"];
    $batch = $_POST["batch"];
    $course = $_POST["course"];
    $password = $_POST["password"];
    $sql = "
        select * from student where id = $id; 
    ";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) > 0) {
        set_message("student already exists");
    } else {
        $sql = "
            insert into student values(
                $id,
                '$name',
                '$dob',
                $semester,
                '$batch',
                '$course',
                '$password'
                )
        ";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            set_message("student successfully added");
        } else {
            set_message("error in adding student");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student | MiniKiosk</title>
    <link rel="stylesheet" href="static/admin.css">
</head>

<body style='background-image: url("assets/jaypee.jpg"); background-size: 100%; background-attachment: fixed;'>
    <div id="navbar">
        <div id="title">
            <h3>MiniKiosk</h3><small>Admin Panel</small>
        </div>
        <div id="nav-items">
            <div class="nav-item"><a href="/dsw_proj/auth/logout.php">Logout</a></div>
        </div>
    </div>
    <div id="form-wrapper">
        <h3>ADD STUDENT</h3> <br><br>
        <form action="add_student.php" method="POST">
            ID <br><input type="number" name="id" id="id">
            <br>
            Name <br><input type="text" name="name" id="name">
            <br>
            DOB <br><input type="date" name="dob" id="dob">
            <br>
            Semester <br><input type="number" name="semester" id="semester">
            <br>
            Batch <br><input type="text" name="batch" id="batch">
            <br>
            Course <br><input type="text" name="course" id="course">
            <br>
            Set Password <br><input type="text" name="password" id="password">
            <br>
            <input type="submit" value="Save" onclick="checkBlankFields();">
        </form>
        <div id="credStat"><?php
                            if (has_messages()) {
                                echo "<div id='errors'>";
                                show_messages();
                                delete_messages();
                                echo "</div>";
                            }
                            ?></div>
    </div>
    <script src="static/admin.js"></script>
</body>

</html>