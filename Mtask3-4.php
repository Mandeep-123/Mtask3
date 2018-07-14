<?php

//login

//connection establishing 
session_start();



$db = mysqli_connect('localhost', 'root', 'password', 'task');

$username = $_POST['username'];
$password = $_POST['password'];

$check = " SELECT * FROM tasks WHERE username='$username' AND password='$password'";
$check1 = mysqli_query($db,$check);
$num = mysqli_num_rows($check1);

if ($num >= 0) {
	// login the person to his account
}
else
{
	die("Wrong credentials");
}

printf("<b> welcome %s</b>",$username);

if (true) {
//session variables
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
}

/*
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="new.pdf"');
readfile('C:\Users\DELL PC\Desktop\new.pdf');
*/

header("Refresh: 1; url=Mtask3-5.html");
?>