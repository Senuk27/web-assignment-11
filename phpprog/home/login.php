<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "sedna"); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $result->num_rows;
$fname = $row['fname'];

if($count == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['fname'] = $fname;
    echo '<script>alert("Login Successful")</script>';
    header("Location: profile.php");
} else {
    echo '<script>alert("Login Failed")</script>';
    header("Location: login.html");
}
?>