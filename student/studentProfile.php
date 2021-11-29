<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/student_login_required.php";
include "../partials/sql_connect.php";
?>
<?php
$id = $_SESSION['id'];
$student_res = mysqli_query($conn, "select name,dob,semester,batch,course from student where id = $id");
$student = mysqli_fetch_assoc($student_res);
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/student.css">
    <title>Student Dashboard | MiniKiosk</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
    <?php include "../partials/navbarStudent.php"  ?>
    <div id="container">
        <h3>PROFILE</h3>
        <div id="profile-wrapper">
            <small>Status: Logged in</small>
            <table>
                <?php
                foreach ($student as $key => $val) {
                    echo "<tr>
                    <div id='key'><th>$key</th></div>
                    <td>$val</td>
                    </tr>";
                }
                ?>
        </table>
    </div>
    <?php
        $string = 'random string';
    ?>
</body>