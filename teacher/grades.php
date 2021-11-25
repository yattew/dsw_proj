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
    unset($_SESSION["batch"]);
}
else{
    if(!isset($_SESSION["batch"]))
    {
        header("location: select_batch.php");
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
    $batch = $_SESSION["batch"];
    unset($_SESSION["batch"]);
    ?>
    <form action="attendance.php" method="POST">
        batch: <?php echo $batch ?>
        <br>
        <table>
            <tr>
                <th>name</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
            </tr>
            <?php
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td> $student </td>";
                echo "<td><input type='radio' name='$student' value='A'></td>";
                echo "<td><input type='radio' name='$student' value='B'></td>";
                echo "<td><input type='radio' name='$student' value='C'></td>";
                echo "<td><input type='radio' name='$student' value='D'></td>";
                echo "<td><input type='radio' name='$student' value='E'></td>";
                echo "<td><input type='radio' name='$student' value='F'></td>";
                echo "</tr>";
            }
            ?>
        </table>
            <input type="submit" value="save">
    </form>
    <a href="select_batch.php">select_batch</a>
</body>

</html>