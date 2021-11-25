<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/faculty_login_required.php";
include "../partials/navbarTeacher.php"
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
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
    <title>Faculty Dashboard | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>
<body>
    <?php
        $batches = array("B2","B1","B3");
    ?>
    <form action="select_batch.php" method="POST">
        select batch
        <select name="batch" id="">
            <?php
            foreach($batches as $batch)
            {
                echo "<option value='$batch'>$batch</option>";
            }
            ?>
            
        </select>
        <input type="submit" value="select">
    </form>
</body>
</html>