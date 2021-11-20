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
        set_message("you are now logged in!!!");
        header("location: /dsw_proj/student/index.php");
        die;
        
    } else {
        $error = "the entered password or enrollment number is wrong";
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
    <?php
    if (has_messages()) {
        echo "<div id='errors'>";
        show_messages();
        delete_messages();
        echo "</div>";
    }
    ?>
    <div id="container">
        <h2>MiniKiosk</h2>
        <div id="form-wrapper">
            <h3>LOGIN</h3>
            <!-- Temporarily changed method to GET to avoid reload prompts in browser -->
            <form action="login.php" method="POST">
                <input type="number" placeholder="Enrolment Number" name="enroll" id="enrol">
                <input type="password" placeholder="Password" name="password" id="pass">
                <div><input type="submit" value="Login"></div>
            </form>
        </div>
    </div>
</body>

</html>