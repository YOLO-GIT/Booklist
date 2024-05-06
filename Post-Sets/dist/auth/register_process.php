<?php

//Create Connection to the database
include '../../conn.php';

// isset = is setted to ?
if (isset($_POST["cmdregister"])) {
    // receive submitted value
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $email = $_POST["email"];
    $password = hash("sha512", $_POST["password"]);
    $confirm_password = hash("sha512", $_POST["confirm_password"]);

    $nickname = 'bababoi';
    $first_tag = 'Alucard';
    $second_tag = 'Symphony';

    // Check if the content already exist:
    // CHECKING START

    //USERNAME
    $check_email_query = "SELECT * FROM tbluser WHERE user_email='$email'";
    $check_email = mysqli_query($con, $check_email_query);
    //PASSWORD
    $check_password_query = "SELECT * FROM tbluser WHERE user_password='$password'";
    $check_password = mysqli_query($con, $check_password_query);

    // CHECKING END

    if (mysqli_num_rows($check_email) > 0) {
        // Validation if the content is same
        echo "<script>alert('Cannot use the same email.');</script>";
        // Close the DB to ensure it will not updated.
        mysqli_close($con);
        // Sending back to the Teacher Panel.
        echo "<script>window.location.href='../register.php';</script>";
    } elseif (mysqli_num_rows($check_password) > 0) {
        // Validation if the content is same
        echo "<script>alert('This username already has been used.');</script>";
        // Close the DB to ensure it will not updated.
        mysqli_close($con);
        // Sending back to the Teacher Panel.
        echo "<script>window.location.href='../register.php';</script>";
    } else {
        // Store the verification code in the database
        $sql_register = "INSERT INTO `tbluser`(`user_id`,`user_first`, `user_last`, `user_email`, `user_password`, `user_nickname`, `user_ftag`, `user_stag`) 
        VALUES ('[value-1]','$fname','$lname','$email','$password','$nickname','$first_tag','$second_tag')";
        // Validation if the content is same
        echo "<script>alert('Success.');</script>";
        // Close the DB to ensure it will not updated.
        mysqli_close($con);
        // Sending back to the Teacher Panel.
        // echo "<script>window.location.href='../home.php';</script>";
    }
}
