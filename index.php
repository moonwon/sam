<?

  $db_host = "localhost";
  $db_user = "root";

  $conn = mysqli_connect($db_host, $db_user, "star", "test");
  if (mysqli_connect_errno($conn)) {
    echo "DB Fail".mysqli_connect_error();
  }
  else {
    $result = mysql_qurry($query);
    
    while ($field = mysql_fetch_field($result)) {
      echo $field->name;
      echo " ";
    }
  }

?>
