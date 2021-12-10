<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/sql_connect.php";
include "../partials/admin_login_required.php";
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
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                NAME
            </th>
            <th>
                DOB
            </th>
            <th>
                SEMESTER
            </th>
            <th>
                BATCH
            </th>
            <th>
                COURSE
            </th>
            <th>
                EDIT
            </th>
        </tr>
        <?php
        $sql = "select id,name,dob,semester,batch,course from student";
        $students = mysqli_query($conn, $sql);
        foreach ($students as $student) {
            echo '<tr>';
            foreach ($student as $key => $val) {
                echo "<td>$val</td>";
            }
            $id = $student["id"];
            echo "<td><form action='update_student.php'>
                <input type='number' name='id' id='id' hidden value='$id'>
                <input type='submit' value='edit'>
                </form></td>";
            echo '</tr>';
        }
        ?>

    </table>
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