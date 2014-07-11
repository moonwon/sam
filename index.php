<? 
 include "queryFunctions.php"
?>

<html>
<head>
<title>Hello World!</title>
</head>
<body>
"query : "
<? queryTest("test", "SELECT * FROM USER;") ?>
</body>
</html>
