<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/faculty_login_required.php";
include "../partials/navbarTeacher.php"
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $batch = $_POST["batch"];
    $_SESSION["batch"] = $batch;
    header("location: grades.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/teacher.css">
    <title>Grades | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
    <?php
    $batches = array("B2", "B1", "B3");
    ?>

    <div id="form-wrapper">
        <form action="select_batch.php" method="POST">
            <h2>Select Batch</h2><br> <div id="batch">
            <select name="batch" id="">
                <?php
                foreach ($batches as $batch) {
                    echo "<option value='$batch'>$batch</option>";
                }
                ?>

            </select> </div><br> <div class="btn">
            <input type="submit" value="Select"> </div>
        </form>
    </div>
</body>

</html>