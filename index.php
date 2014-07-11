<?php

  $db_host = "localhost";
  $db_user = "ec2-user";

  $conn = mysqli_connect($db_host, $db_user, "");
  if ($conn) {
    echo "DB Connected!";
    
    mysql_select_db("test");
    $result = mysql_query("select * from user", $conn);
    
    if ($result) {
      echo "<br>QUERY SUCCESS";
      while ($row = mysql_fetch_array($result)) {
        echo "row : ".$row[0]." ".$row[1]."<br>";
      }
    }
    else {
      echo "<br>QUERY ERROR";
    }
  }
  else {
    echo "DB Fail";
  }

?>
