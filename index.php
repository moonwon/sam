<?php

  $db_host = "localhost";
  $db_user = "ec2-user";

  $conn = mysqli_connect($db_host, $db_user, "", "test");
  if ($conn) {
    echo "DB Connected";
    
    $result = mysql_qurry("SELECT * FROM user;");
    
    while ($row = mysql_fetch_array($result)) {
      echo "<br>".$row[0]."<br>";
    }
  }
  else {
    echo "DB Fail";
  }

?>
