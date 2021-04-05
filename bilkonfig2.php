<?php
if(!isset($_POST['lagre1'])) {
    header('LOCATION:bilkonfig.php'); die();
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bilkonfigurator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <link rel="stylesheet" type="text/css" href="bilkonfig.css">
 <script src="bilkonfig.js"></script>


<?php


session_start();


$_SESSION['farge'] = $_POST['farge'];

$_SESSION['hjulstorrelse']
        = $_POST['hjulstorrelse'];

$_SESSION['felg']
        = $_POST['felg'];
$_SESSION['fornavn'] = $_POST['fornavn'];

$_SESSION['etternavn'] = $_POST['etternavn'];
?>

</head>
<body>

  <div class="header">
    <h1>Bilkonfigurator</h1>
    <p>På denne siden kan du velge hvordan bilen din skal se ut på innsiden!</p>
  	<a href="logginn.php">Logg inn</a>
  	<a href="prisliste.php">Prisliste</a>
  </div>

<div class="content">
<form class="skjema" action="bilkonfig3.php" method="POST">

  <select name="sete" id="sete" required>
		<option value="" disabled selected>Velg seter for bilen</option>
    <option value="standard seter">Standard</option>
    <option value="S-line seter">S-Line</option>

  </select>
  <p>

  <select name="ratt" id="ratt" required>
		<option value="" disabled selected>Velg ratt for bilen</option>
    <option value="standard ratt">standard</option>
    <option value="S-line flat bottom ratt">E-tron flat bottom</option>

  </select>
  <p>



<p></p>

<p>Interiøret i bilen ser nå slik ut:</p>
<img id="image" src="bilder/standard seter.jpg" height="200"><p>
	<p>Bilen leveres med dette rattet:</p>

<img id="ratt1" src="bilder/standard ratt.jpg" height="200"><p>

	<p>Priser:</p>
	<div id="result"></div>
	<div id="result1"></div>

<input type="submit" value="Gå videre" name="lagre2">
</form>
<div class="oppsummering">
  <?php
    require 'config.php';
    $farge = $_POST['farge'];
    $hjulstorrelse = $_POST['hjulstorrelse'];
    $felg = $_POST['felg'];
    $sql = "SELECT SUM(pris) AS sumpris FROM Prisliste WHERE produkt IN('$farge', '$hjulstorrelse', '$felg')";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<h2>Oppsummering:</h2><br>";
        echo "Farge: " . $farge . "<br>";
        echo "Hjulstørrelse: " . $hjulstorrelse . "<br>";
        echo "Felg: " . $felg . "<br>";
        echo "<b> Totalpris så langt: " . (($row['sumpris'])+500000) . "kr." . "</b>";
      }
    } else {
      echo "Noe gikk galt ved utregning av pris.";
    }

   ?>
</div>
</div>

</body>

<script type="text/javascript">



var changeCarImage = function () {
  document.getElementById('image').src = "bilder/" + this.options[this.selectedIndex].value + ".jpg"
}
var farge = document.getElementById('sete');
farge.addEventListener('change', changeCarImage, false);


var changeFelgImage = function () {
  document.getElementById('ratt1').src = "bilder/" +  this.options[this.selectedIndex].value + ".jpg"
}
var felg = document.getElementById('ratt');
felg.addEventListener('change', changeFelgImage, false);
</script>
</html>
