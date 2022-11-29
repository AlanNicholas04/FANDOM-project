<?php 

$fullName = explode(" ",$_POST['fullName']);

  //UNCOMMENT THE LINES UNDER IT For IT TO ECHO NAME
$fName = fullName[0];
$lName = fullName[1];

$reason = $_POST['reason'];

header("Location: /form.php?fName=$fName&lName=$lName&reason=$reason");

?>