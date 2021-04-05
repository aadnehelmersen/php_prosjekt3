<!DOCTYPE html>
<html lang="en">
<head>
<title>Bilkonfigurator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="bilkonfig.css">

</head>
<body>

<div class="header">
  <a href="bilkonfig.php"><h1>Bilkonfigurator</h1></a>

  <p>På denne siden kan du se prisene for utstyr til din bil!</p>
</div>

<div class="content">
  <div class="skjema">

<?php
include ("config.php");
session_start();

$sql = "SELECT * FROM Prisliste";
$result = $db->query($sql);


if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo  $row["produkt"]. " - pris: " . $row["pris"].  "<br>";
  }
} else {
  echo "0 results";
}
$db->close();

 ?>
 </div>
</div>

</body>
</html>
