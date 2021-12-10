<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/sql_connect.php";
?>

<?php
$error;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enroll = $_POST["enroll"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "select * from faculty where id = '$enroll' and password = '$password'");
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["auth_status"] = true;
        $_SESSION["id"] = $enroll;
        $_SESSION["level"] = "faculty";
        header("location: /dsw_proj/teacher/teacherProfile.php");
        die;
    } else {
        $error = "User credentials are incorrect.";
        set_message($error);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/index.css">
    <title>Login | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
<marquee behavior="" scrollamount=10 direction="right">
        <p style="color:white">Jaypee Institute of Information Technology, Noida-62</p>
    </marquee>
    <div id="container">
        <h2 style="color: white;">MiniKiosk</h2>
        <div id="form-wrapper">
            <h3>FACULTY LOGIN</h3>
            <!-- Temporarily change method to GET to avoid reload prompts in browser -->
            <form action="loginTeacher.php" method="POST">
                <input type="number" placeholder="Faculty ID" name="enroll" id="enrol">
                <input type="password" placeholder="Password" name="password" id="pass">
                <div><input type="submit" value="Login" onclick="checkBlankFields();"></div>
                <div id="credStat"><?php
                                    if (has_messages()) {
                                        echo "<div id='errors'>";
                                        show_messages();
                                        delete_messages();
                                        echo "</div>";
                                    }
                                    ?></div>
            </form>
            <div id="loginElsewhere">
                or <a href="loginStudent.php">click here</a> to go to the student login page
            </div>
        </div>
    </div>
    <script src="static/teacher.js"></script>
</body>

</html>