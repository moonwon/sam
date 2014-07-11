<?php

  $db_host = "localhost";
  $db_user = "ec2-user";

  $conn = mysqli_connect($db_host, $db_user, "", "test");
  if ($conn) {
    echo "DB Connected<br>a";
    
    $result = mysql_qurry("SELECT * FROM user", $conn);
    
    if ($result) {
      echo "<br>QUERY SUCCESS";
      while ($row = mysql_fetch_array($result)) {
        echo "row : ".$row[0]."<br>";
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
