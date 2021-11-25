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
    $students = array("yathansh", "arpit", "nishttha", "simran");
    ?>
    <form action="attendance.php" method="POST">
        date:<input type="date">
        <br>
        <table>
            <tr>
                <th>name</th>
                <th>present</th>
                <th>absent</th>
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
            <input type="submit" value="save">
    </form>
</body>

</html>