<?php
include "../partials/session.php";
include "../partials/messages.php"
?>

<?php
$error;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enroll = 123;
    $password = "pass";
    if ($_POST["enroll"] == $enroll and $password == $_POST["password"]) {
        set_message("Status: Logged in");
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
    <div id="container">
        <h2>MiniKiosk</h2>
        <div id="form-wrapper">
            <h3>FACULTY LOGIN</h3>
            <!-- Temporarily change method to GET to avoid reload prompts in browser -->
            <form action="loginTeacher.php" method="POST">
                <input type="number" placeholder="Faculty ID" name="enroll" id="enrol">
                <input type="password" placeholder="Password" name="password" id="pass">
                <div><input type="submit" value="Login"></div>
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
        </div> </div>
    </div>
</body>

</html>