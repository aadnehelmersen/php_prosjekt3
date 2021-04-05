<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: logginn.php');
	exit;
}
?>
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
  <p>På denne siden kan du velge en bestilling du ønsker å se alle detaljer for. Velg bestilling i nedtrekkslisten og trykk på kanppen "Se bestilling"</p>
	<a href="logginn.php">Logg inn</a>
	<a href="prisliste.php">Prisliste</a>
  <a href="loggut.php">Logg ut</a>
</div>

<div class="content">
	<div class="skjema">


<h1>Her har du en oversikt over alle salg:</h1>
<?php
include ("config.php");

$sql = "SELECT * FROM Bestillinger";
$result = $db->query($sql);


if ($result->num_rows > 0) {
  echo "<form class='bestilling'  method='POST' action='sebestilling.php'>";
  echo "<select name='id' id='id' required>";
  while($row = $result->fetch_assoc()) {



    echo "<option value=" .$row["id"]. ">" .$row["id"]. " ". $row["fornavn"]. " ". $row["etternavn"].  "</option>";



  }
  echo "</select>";
  echo "<p>";
  echo "<input type='submit' value='Se bestilling'></input>";
} else {
  echo "0 results";
}
$db->close();





?>
</div>
</div>

</body>
</html>
