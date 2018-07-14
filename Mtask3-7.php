<?php

//session starting

session_start();

$db = mysqli_connect('localhost', 'root', 'password', 'task');

//showing appointments

$userp = $_SESSION['username'];
$eventp = $_SESSION['event'];
$datep = $_SESSION['date'];
$starttimep = $_SESSION['starttime'];
$endtimep = $_SESSION['endtime'];

$event1 = "SELECT event FROM tasks WHERE username='$userp' ";
$event2= mysqli_query($db,$event1);
$num1 = mysqli_num_rows($event2);

$date1 = "SELECT dates FROM tasks WHERE username='$userp' ";
$date2 = mysqli_query($db,$date1);

$starttime1 = "SELECT starttime FROM tasks WHERE username='$userp' ";
$starttime2 = mysqli_query($db,$starttime1);

$endtime1 = "SELECT endtime FROM tasks WHERE username='$userp' ";
$endtime2 = mysqli_query($db,$endtime1);

printf("<b> Your Appointments</b><br><br><br><br><br>");

while (($event3 = mysqli_fetch_array($event2)) && ($date3 = mysqli_fetch_array($date2)) && ($starttime3 = mysqli_fetch_array($starttime2)) && ($endtime3 = mysqli_fetch_array($endtime2))) {
printf("<b>Event:</b> %s <br> <b>Date: </b> %s <br> <b>Starttime:</b> %s <br> <b>Endtime: </b> %s <br><br><br><br><br>",$event3[0],$date3[0],$starttime3[0],$endtime3[0]);
}

?>
Click here to <a href="Mtask3-8.php" tite="Logout">Logout.</a>