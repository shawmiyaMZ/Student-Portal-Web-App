<?php

$sname = "localhost";
$uname = "root";
$pass = "";
$dbname = "student_portal";

$con = mysqli_connect($sname, $uname, $pass, $dbname);

if (!$con) {
    die("connection Failed: " . mysqli_connect_error());
}


if (isset($_POST['request'])) {

    $request = $_POST['request'];

    $query = "SELECT * FROM course WHERE field_name = '$request'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows(($result));

?>

    <table class="table">

        <?php
        if ($count) {

        ?>


            <thead>
                <tr>
                    <th>Course ID </th>
                    <th>Course Name</th>
                    <th>University Name</th>
                    <th>Duration</th>
                    <th>Requirement</th>
                    <th>Language</th>

                </tr>
            <?php
        } else {
            echo "Sorry! No Record Found";
        }

            ?>
            </thead>

            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {

                ?>

                    <tr>
                        <td><?php echo $row['course_id'] ?> </td>
                        <td><?php echo $row['course_name'] ?> </td>
                        <td><?php echo $row['institute_name'] ?> </td>
                        <td style="text-align: center;"> <?php echo $row['duration'] ?> </td>
                        <td><?php echo $row['criteria'] ?> </td>
                        <td><?php echo $row['language'] ?> </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>

    </table>

<?php
}
?>