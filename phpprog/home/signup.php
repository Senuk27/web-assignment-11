<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password= $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "sedna"); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')";

if($conn->query($sql) === TRUE) {
    echo '<script>alert("New user created successfully")</script>';
    header("Location: login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>