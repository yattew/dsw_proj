<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/sql_connect.php";
?>

<?php
$error;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST["user"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "select * from admin where id = '$userid' and password = '$password'");
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["auth_status"] = true;
        $_SESSION["id"] = $userid;
        $_SESSION["level"] = "admin";
        header("location: /dsw_proj/admin/index.php");
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
    <title>Admin Login | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body style='background-image: url("assets/jaypee.jpg");'>
    <div id="container">
        <h2 style="color:white;">MiniKiosk</h2>
        <div id="form-wrapper">
            <h3>ADMIN LOGIN</h3>
            <!-- Temporarily change method to GET to avoid reload prompts in browser -->
            <form action="loginAdmin.php" method="POST">
                <input type="number" placeholder="Admin ID" name="user" id="user">
                <input type="password" placeholder="Password" name="password" id="pass">
                <div><input type="submit" value="Login" id="submit" onclick="checkBlankFields();"></div>
                <div id="credStat">
                    <?php
                    if (has_messages()) {
                        echo "<div id='errors'>";
                        show_messages();
                        delete_messages();
                        echo "</div>";
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
    <script src="static/admin.js">
    </script>
</body>

</html>