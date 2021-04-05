<?php
if(!isset($_POST['lagre2'])) {
    header('LOCATION:bilkonfig2.php'); die();
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

$_SESSION['sete'] = $_POST['sete'];

$_SESSION['ratt'] = $_POST['ratt'];


?>

</head>
<body>

  <div class="header">
    <h1>Bilkonfigurator</h1>
    <p>På denne siden kan du velge ekstrautstyr for bilen</p>
  	<a href="logginn.php">Logg inn</a>
  	<a href="prisliste.php">Prisliste</a>
  </div>

<div class="content">
<form class="skjema" action="takk.php" method="POST">

  <select name="cruise" id="cruise" required>
		<option value="" disabled selected>Ønsker du Cruise Control?</option>
    <option value="med cruise control">Ja</option>
    <option value="uten cruise control">Nei</option>

  </select>
  <p>

  <select name="lydanlegg" id="lydanlegg" required>
		<option value="" disabled selected>Velg lydanlegg for bilen</option>
    <option value="standard lydanlegg">standard (Bose)</option>
    <option value="Bang&Olufsen lyd">Bang&Olufsen</option>

  </select>
  <p>

    <select name="sikkerhet" id="sikkerhet" required>
			<option value="" disabled selected>Velg sikkerhetspakke for bilen</option>
      <option value="airbag">airbag</option>
      <option value="lane keeping assist">lane keeping assist (inkl. airbag)</option>

    </select>
<p></p>
<p></p>

<p>Du har valgt dette utstyret:</p>
<img id="image" src="bilder/standard lydanlegg.jpg" height="200"><p>
<img id="image2" src=""  height="200"><p>
<img id="image3" src="" height="200">

<p>Priser:</p>
<div id="result"></div>
<div id="result1"></div>
<div id="result2"></div>

<input type="submit" value="Lagre bestilling" name="lagre3">
</form>
<div class="oppsummering">
  <?php
    require 'config.php';
    $sete = $_POST['sete'];
    $ratt = $_POST['ratt'];
    $farge = $_SESSION['farge'];
    $hjulstorrelse = $_SESSION['hjulstorrelse'];
    $felg = $_SESSION['felg'];
    $sql = "SELECT SUM(pris) AS sumpris FROM Prisliste WHERE produkt IN('$farge', '$hjulstorrelse', '$felg', '$sete', '$ratt')";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<h2>Oppsummering:</h2><br>";
        echo "Farge: " . $farge . "<br>";
        echo "Hjulstørrelse: " . $hjulstorrelse . "<br>";
        echo "Felg: " . $felg . "<br>";
        echo "Sete: " . $sete . "<br>";
        echo "Ratt: " . $ratt . "<br>";
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
var changeCruiseImage = function () {
  document.getElementById('image2').src = "bilder/" + this.options[this.selectedIndex].value + ".jpg"
}
var cruise = document.getElementById('cruise');
cruise.addEventListener('change', changeCruiseImage, false);



var changeCarLyd = function () {
  document.getElementById('image').src = "bilder/" + this.options[this.selectedIndex].value + ".jpg"
}
var lyd = document.getElementById('lydanlegg');
lyd.addEventListener('change', changeCarLyd, false);




var changeSikkerhetImage = function () {
  document.getElementById('image3').src = "bilder/" + this.options[this.selectedIndex].value + ".png"
}
var sikkert = document.getElementById('sikkerhet');
sikkert.addEventListener('change', changeSikkerhetImage, false);
</script>
</html>
