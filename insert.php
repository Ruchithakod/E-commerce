<?php
// Database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

// Creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Ensuring the connection is made
if (!$con) {
    die("Connection failed!" . mysqli_connect_error());
}

// Check if submit button for insert is clicked
if (isset($_POST['submit'])) {
    $std_reg_no = $_POST['std_reg_no'];
    $std_name = $_POST['std_name'];
    $std_course = $_POST['std_course'];
    $std_marks = $_POST['std_marks'];

    // Insert query
    $sql = "INSERT INTO mdc (regno, name, course, marks) VALUES ('$std_reg_no', '$std_name', '$std_course', '$std_marks')";
    $rs = mysqli_query($con, $sql);
    
    if ($rs) {
        echo "Entries added!";
    }
}

// Check if update button is clicked
if (isset($_POST['update'])) {
    $std_reg_no = $_POST['std_reg_no'];
    $std_name = $_POST['std_name'];
    $std_course = $_POST['std_course'];
    $std_marks = $_POST['std_marks'];

    // Update query
    $sql = "UPDATE mdc SET name='$std_name', course='$std_course', marks='$std_marks' WHERE regno='$std_reg_no'";
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "Record updated!";
    }
}

// Check if delete button is clicked
if (isset($_POST['delete'])) {
    $std_reg_no = $_POST['std_reg_no'];

    // Delete query
    $sql = "DELETE FROM mdc WHERE regno='$std_reg_no'";
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "Record deleted!";
    }
}

// Close connection
mysqli_close($con);
?>