<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/faculty_login_required.php";
include "../partials/navbarTeacher.php";
include "../partials/sql_connect.php";
?>
<?php
if (isset($_SESSION["batch"])) {
    $batch = $_SESSION["batch"];
    $res = mysqli_query(
        $conn,
        "select id, name from student where batch = '$batch' "
    );
    $students = array();
    while ($temp = mysqli_fetch_assoc($res)) {
        array_push($students, $temp);
    }
} else {
    header("location: select_batch1.php");
    die;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION["id"];
    $subject = "";
    $res = mysqli_query($conn, "select subject from faculty, faculty_subjects where id = $id and id = f_id");
    $subject = mysqli_fetch_assoc($res)["subject"];
    $data = $_POST;
    $date = $data["date"];
    unset($data["date"]);
    foreach ($data as $id => $status) {
        $res = mysqli_query(
            $conn,
            "select * from attendance 
            where s_id = $id and day = '$date' and subject = '$subject' and s_id = $id"
        );
        if (mysqli_num_rows($res) == 0) {
            mysqli_query($conn, "insert into attendance values($id,'$date','$subject','$status')");
        } else {
            mysqli_query(
                $conn,
                "update attendance set status = '$status'
                where s_id=$id and day = '$date'"
            );
        }
    }
    set_message("Attendance has been saved");
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
    <div id="form-wrapper">
        <h3>ATTENDANCE</h3>
        <form action="attendance.php" method="POST">
            Date:<input type="date" name="date" id="today">
            <br>
            <table>
                <tr>
                    <th>ENROLL</th>
                    <th>Name</th>
                    <th>Present</th>
                    <th>Absent</th>
                </tr>
                <?php
                foreach ($students as $student) {
                    $name = $student["name"];
                    $id = $student["id"];
                    echo "<tr>";
                    echo "<td> $id</td>";
                    echo "<td> $name </td>";
                    echo "<td><input type='radio' name='$id' value='1'></td>";
                    echo "<td><input type='radio' name='$id' value='0'></td>";
                    echo "</tr>";
                }

                ?>
            </table>
            <div class="btn"><input type="submit" value="Save Attendance"> </div>
            <div id="updated"><small><?php
                                        if (has_messages()) {
                                            echo "<div id='errors'>";
                                            show_messages();
                                            delete_messages();
                                            echo "</div>";
                                        }
                                        ?></small></div>
            <a href="select_batch1.php" id="diffbatch">Select a different batch</a>
        </form>
    </div>
    <script src="static/attendance.js"></script>
</body>

</html>