<?php


//event adding
session_start();

$db = mysqli_connect('localhost', 'root', 'password', 'task');

$event = $_POST['event'];
$date = $_POST['date'];
$starttime = $_POST['starttime'];
$endtime = $_POST['endtime'];


//session variables

$userp = $_SESSION['username'];
$passwordp = $_SESSION['password'];

$sql = "INSERT INTO tasks(username,email,password,event,dates,starttime,endtime) VALUES ('$userp', '$userp', '$passwordp', '$event', '$date', '$starttime', '$endtime') ";

$ins = mysqli_query($db,$sql);

if (!$ins) {

printf("format");

die("<br>".mysql_error());
}

$_SESSION['event'] = $event;
$_SESSION['date'] = $date;
$_SESSION['starttime'] = $starttime;
$_SESSION['endtime'] = $endtime;

header("Location: Mtask3-7.php");

?>