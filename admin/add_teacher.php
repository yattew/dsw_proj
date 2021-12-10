<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/sql_connect.php";
include "../partials/admin_login_required.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phno = $_POST["phno"];
    $password = $_POST["password"];
    $dept = $_POST["dept"];
    $sql = "
        select * from faculty where id = $id; 
    ";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) > 0) {
        set_message("teacher already exists");
    } else {
        $sql = "
            insert into faculty values($id,'$name',$phno,'$password','$dept')
        ";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            set_message("teacher has been added");
        } else {
            set_message("error in adding new teacher");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="add_teacher.php" method="POST">
        id:<input type="number" name="id" id="id">
        <br>
        name:<input type="text" name="name" id="name">
        <br>
        phno: <input type="number" name="phno" id="phno">
        <br>
        password: <input type="text" name="password" id="password">
        <br>
        dept: <input type="text" name="dept" id="dept">
        <br>
        <input type="submit" value="save">
    </form>
    <div id="credStat"><?php
                        if (has_messages()) {
                            echo "<div id='errors'>";
                            show_messages();
                            delete_messages();
                            echo "</div>";
                        }
                        ?></div>
</body>

</html>