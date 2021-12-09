<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/sql_connect.php";
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
                PHNO
            </th>
            <th>
                DEPT
            </th>
        </tr>
        <?php
            $sql = "select id,name,phno,dept from faculty";
            $teachers = mysqli_query($conn,$sql);
            foreach ($teachers as $teacher) {
                echo '<tr>';
                foreach($teacher as $key => $val)
                {
                    echo "<td>$val</td>";
                }
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>