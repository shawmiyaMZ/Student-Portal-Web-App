<?php


include('nav.php');

?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $con = mysqli_connect("localhost", "root", "", "student_portal");

    if (!$con) {
        die("cannot connect to database");
    }

    $sql_insert_data = "INSERT INTO feedback(title, comment, rating) 
    VALUES('" . $_POST['title'] . "', '" . $_POST['comment'] . "', '" . $_POST['rating'] . "')";

    // echo $sql_insert_data;

    if (!mysqli_query($con, $sql_insert_data)) {
        die("Error occur inserting data:" . mysqli_error($con));
    } else {
        echo " recorded successful ";
        header('Location: contact.php');
        exit();
    }
}

?>

