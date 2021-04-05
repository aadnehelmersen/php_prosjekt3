<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: logginn.php');
	exit;
}
$id = $_POST["id"];
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
  <p>På denne siden kan du se hele bestillingen du har valgt</p>
	<a href="logginn.php">Logg inn</a>
	<a href="prisliste.php">Prisliste</a>
  <a href="loggut.php">Logg ut</a>
</div>

<div class="content">
	<div class="skjema">

<h1>Bestilling med ID nr <?php echo $id; ?></h1>
<?php
include ("config.php");

$id = $_POST["id"];

$sql = "SELECT * FROM Bestillinger where id=$id";
$result = $db->query($sql);


if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {



    echo "id: ".$row["id"]. "<p>Fornavn: " .$row["fornavn"]. "<p>Etternavn:  ". $row["etternavn"].
     "<p>Farge: ". $row["farge"] . "<p>Hjulstørrelse: ". $row["hjulstorrelse"] .
     "<p>Felg: ". $row["felg"] . "<p>Sete: ". $row["sete"]
    . "<p>ratt: ". $row["ratt"] . "<p>Cruise Control: ". $row["cruise"] . "<p>Lydanlegg: ". $row["lydanlegg"]
    . "<p>Sikkerhet: ". $row["sikkerhet"]. "<p>Pris: ". $row["pris"];



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
