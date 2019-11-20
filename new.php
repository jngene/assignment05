<?php
include('connect-db.php');
$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
$subject = mysqli_real_escape_string($connection, htmlspecialchars($_POST['subject']));
$query = mysqli_real_escape_string($connection, htmlspecialchars($_POST['query']));
mysqli_query($connection, "INSERT INTO barcelona_contact (name, email, subject, query) VALUES ('$name', '$email', '$subject', '$query')");
mysqli_close($connection);
?>