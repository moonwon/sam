<?php

  $db_host = "localhost";
  $db_user = "ec2-user";

  $conn = mysqli_connect($db_host, $db_user, "", "testa");
  if ($conn) {
    echo "DB Connected";
    
    $result = mysql_qurry("SELECT * FROM USER;");
    
    while ($row = mysql_fetch_array($result)) {
      echo $row[0];
    }
  }
  else {
    echo "DB Fail";
  }

?>
