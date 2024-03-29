<?php // Sekiranya button submit diklik

// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION["IDUser"])) {
    echo "<script>window.location.href='../../../index.php';</script>";
    exit;
}

// isset = is setted to ?
if (isset($_POST["cmdlogin"])) {
    $email = $_POST["email"];
    $password = hash("sha512", $_POST["password"]);

    //Create Connection to the database
    include '../../conn.php';

    // Define SQL Statement for comparison
    $sql = "SELECT * FROM `tbluser` WHERE user_email='$email' AND user_password='$password'";

    // Execute SQL Statement
    $res = mysqli_query($con, $sql);

    // Check returning value in $res for validation
    if (mysqli_num_rows($res) > 0) {
        $user = mysqli_fetch_assoc($res);
        // Create a session with a name IDStud
        $_SESSION["IDUser"] = $user["user_ID"];
        // Inform to the user
        echo "<script>alert('Login Success');</script>";
        // Redirect to index.php
        echo "<script>window.location.href='../home.php';</script>";
        exit;
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }

    // Close Connection
    mysqli_close($con);
}
