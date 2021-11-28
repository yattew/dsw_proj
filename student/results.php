<?php
include "../partials/session.php";
include "../partials/messages.php";
include "../partials/student_login_required.php";
include "../partials/sql_connect.php";
?>
<?php
$id = $_SESSION["id"];
$result_res = mysqli_query($conn, "select subject,semester,grade from result where s_id=$id");
$results = array();
$temp;
while ($temp = mysqli_fetch_assoc($result_res)) {
    array_push($results, $temp);
}
unset($temp);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="static/student.css">
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <title>Result | MiniKiosk</title>
</head>
<style>
    #container {
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
        padding: 40px;

        background: #e6e6e6;
        max-width: 1000px;
        box-shadow: 0px 5px 30px -3px rgb(37, 37, 37);
        border-radius: 12px;
    }

    .heading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -1550%);
    }

    table {
        border-collapse: separate;
        border-spacing: 0 1rem;

    }

    th,
    td {
        text-align: center;
    }

    tr:nth-child(odd) {
        background-color: rgba(144, 216, 238, 0.637);
    }

    tr:nth-child(even) {
        background-color: rgba(223, 223, 223, 0.808);
    }

    tr {
        box-shadow: 0px 5px 20px -15px rgba(37, 37, 37);
    }
</style>

<body>
    <?php include "../partials/navbarStudent.php"  ?>
    <div class="heading">
        <h3>RESULT</h3>
    </div>
    <div id="container">
        <table style="width:100%">
            <tr style="height:60px">
                <th style="width:10%" ;>S. NO.</th>
                <th>SUBJECT</th>
                <th style="width:18%">SEMESTER</th>
                <th style="width:15%">GRADE AWARDED</th>
            </tr>
            <?php
            $ct = 1;
            foreach ($results as $result) {
                echo '<tr style="height:50px" ;bgcolor="lightblue">';
                echo "<td>$ct</td>";
                foreach($result as $key => $val)
                {
                    echo "<td>$val</td>";
                }
                echo '</tr>';
            }
            ?>
        </table>
    </div>
</body>

</html>