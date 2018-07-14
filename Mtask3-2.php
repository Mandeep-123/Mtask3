<?php

$db = mysqli_connect('localhost', 'root', 'password', 'task');

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password2 = mysqli_real_escape_string($db, $_POST['password2']);

if ($password == $password2) {
}
else
{
	die("The two <b>Passwords</b> not match");
}

$check = " SELECT * FROM tasks WHERE username='$username'";
$check1 = mysqli_query($db,$check);
$num = mysqli_num_rows($check1);

//printf("Result set has %d rows %s",$num,$username);

if ($num == 0) {
	
$sql = "INSERT INTO tasks(username,email,password,event,dates,starttime,endtime) VALUES ('$username', '$email', '$password', 'default', 'default', 'default', 'default') ";

$ins = mysqli_query($db,$sql);

if (!$ins) {

printf("Not Inserted");

die("<br>".mysql_error());
}

}
else
{
	die("<br>USERNAMEo<b>already taken</b>");
}

echo date('h:i:s:u a, l jS F Y e');

header("location: Mtask3-3.html");

?>