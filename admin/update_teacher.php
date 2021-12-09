<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/sql_connect.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET["id"])) {
        header("location: index.php");
        die;
    } else {
        $id = $_GET["id"];
        $res = mysqli_query($conn,"
            select name,phno,dept from faculty where id = '$id'
        ");
        $teacher = mysqli_fetch_assoc($res);
    }
} else {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phno = $_POST["phno"];
    $dept = $_POST["dept"];
    $sql = "
    update faculty 
    set name = '$name', phno = '$phno', dept='$dept'
    where id = $id
    ";
    $res = mysqli_query($conn,$sql);
    if($res)
    {
        set_message("teacher data updated successfully");
    }
    else
    {
        set_message("errro encountered while updating");
    }
    header("location: list_teachers.php");
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
    <form action="update_teacher.php" method="POST">
        <input type="number" name="id" id="" value="<?php echo $id ?>" hidden>
        name: <input type="text" name="name" id="name" value="<?php echo $teacher['name']?>">
        <br>
        batch: <input type="number" name="phno" id="" value="<?php echo $teacher['phno']?>">
        <br>
        course: <input type="text" name="dept" id="" value="<?php echo $teacher['dept']?>">
        <br>
        <input type="submit" value="save">
    </form>
</body>

</html>