<?

  $db_host = "localhost";
  $db_user = "ec2-user";

  $conn = mysqli_connect($db_host, $db_user, "", "testa");
  if (mysqli_connect_errno($conn)) {
    echo "DB Fail".mysqli_connect_error();
  }
  else {
    $result = mysql_qurry("SELECT * FROM USER;");
    
    while ($row = mysql_fetch_array($result)) {
      echo $row[0];
    }
  }

?>
