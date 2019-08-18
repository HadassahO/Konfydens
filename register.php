<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "registration";

$connection = mysqli_connect("$servername", "$user","$password","$dbname"); // Establishing connection with server..
$name=$_POST['name1']; // Fetching Values from URL.
$email=$_POST['email1'];
$password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$query = "insert into regi(name, email, password) values ('$name', '$email', '$password')";
	$ressul= mysqli_query($connection, $query); // Insert query
}
if($query){
echo "You have Successfully Registered.....";
}
mysqli_close ($connection);
?>