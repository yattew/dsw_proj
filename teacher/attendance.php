<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/faculty_login_required.php";
include "../partials/navbarTeacher.php"
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<br><br>";
    foreach($_POST as $key=>$val)
    {
        echo $key ." : " . $val ."<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/teacher.css">
    <title>Faculty Dashboard | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
    <?php
    $students = array("Yathansh", "Arpit", "Nishttha", "Simran");
    ?>
    <div id="form-wrapper">
        <h3>ATTENDANCE</h3>
    <form action="attendance.php" method="POST">
        Date:<input type="date">
        <br>
        <table>
            <tr>
                <th>Name</th>
                <th>Present</th>
                <th>Absent</th>
            </tr>
            <?php
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td> $student </td>";
                echo "<td><input type='radio' name='$student' value='1'></td>";
                echo "<td><input type='radio' name='$student' value='0'></td>";
                echo "</tr>";
            }

            ?>
        </table>
        <div class="btn"><input type="submit" value="Update Attendance"> </div>
        <div id="updated"><small>Attendance has been updated</small></div>
    </form>
    </div>
</body>

</html>