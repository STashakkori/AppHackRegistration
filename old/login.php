<html>
<body>
<?php

 include_once("login.txt");
      mysql_select_db("apphack",$mydb);
      $result = @mysql_query("SELECT * FROM attendees",$mydb);

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

?>
</body>
</html>
