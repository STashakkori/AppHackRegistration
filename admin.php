<?php

require('php-excel.class.php');

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("apphack", $con);

$result = @mysql_query("SELECT * FROM attendees",$con);

$xls = new Excel_XML;

while( $row = mysql_fetch_array($result) )
        {
	      echo( $row["id"]);
              echo("    ");
              echo( $row["fname"]);
              echo("    ");
              echo( $row["lname"]);
              echo("    ");
              echo( $row["email"]);
              echo("     ");
              echo( $row["phone"]);
              echo("<br>");
        }

mysql_close($con);
$xls->addArray ( $result );
$xls->generateXML ( "attendeelist" );

?>

