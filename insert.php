<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("apphack", $con);

$sql="INSERT INTO attendees (fname, lname, email, phone)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[phone]')";

if (!mysql_query($sql,$con))
  {
  //die('Error: ' . mysql_error());
  }

	      echo( "You are are now registered for AppHack!");	      
	      echo("<br>");

mysql_close($con);
?>

