<?php
if(!isset($_POST['lagre3'])) {
    header('LOCATION:bilkonfig3.php'); die();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bilkonfigurator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="bilkonfig.css">
<?php
include ("config.php");
session_start();


    $fornavn = mysqli_real_escape_string($db, $_SESSION['fornavn']);
    $etternavn = mysqli_real_escape_string($db, $_SESSION['etternavn']);
    $farge = mysqli_real_escape_string($db, $_SESSION['farge']);
    $hjulstorrelse = mysqli_real_escape_string($db, $_SESSION['hjulstorrelse']);
    $felg = mysqli_real_escape_string($db, $_SESSION['felg']);
    $sete = mysqli_real_escape_string($db, $_SESSION['sete']);
    $ratt = mysqli_real_escape_string($db, $_SESSION['ratt']);
    $cruise = mysqli_real_escape_string($db, $_POST['cruise']);
    $lydanlegg = mysqli_real_escape_string($db, $_POST['lydanlegg']);
    $sikkerhet = mysqli_real_escape_string($db, $_POST['sikkerhet']);



    $tags = array(0);
    $sql = "SELECT pris FROM Prisliste WHERE produkt IN ('$farge', '$hjulstorrelse',
      '$felg', '$sete', '$ratt',
      '$cruise', '$lydanlegg', '$sikkerhet');";
    $result = mysqli_query($db,$sql);

    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){

      $tmp = $row['pris'];
      array_push($tags, $tmp);
    }
    $totalutstyr = (array_sum($tags));
    $total = $totalutstyr + 500000;


    $query = "
    INSERT INTO `Bestillinger` (`fornavn`, `etternavn`, `farge`, `hjulstorrelse`, `felg`, `sete`,
          `ratt`, `cruise`, `lydanlegg`, `sikkerhet`, `pris`) VALUES ('$fornavn', '$etternavn', '$farge', '$hjulstorrelse',
          '$felg', '$sete', '$ratt',
          '$cruise', '$lydanlegg', '$sikkerhet', '$total');";


          mysqli_query($db, $query);




          mysqli_close($db);

  ?>

</head>
<body>

  <div class="header">
      <a href="bilkonfig.php"><h1>Bilkonfigurator</h1></a>
    <p>På denne siden kan du velge hvordan bilen din skal se ut på utsiden!</p>
  	<a href="logginn.php">Logg inn</a>
  	<a href="prisliste.php">Prisliste</a>
  </div>

<div class="content">
  <div class="skjema">

<h1>Takk for din bestilling! Du hører fra oss når bilen din er klar for henting :)</h1>
<?php echo "<h1>Din bestilling:</h1>";
echo $fornavn . "<p>" .$etternavn . "<p>". $farge .
 "<p>". $hjulstorrelse. "<p>". $felg.
 "<p>". $sete . "<p>". $ratt
. "<p>". $cruise . "<p>". $lydanlegg. "<p>". $sikkerhet. "<p>";
echo "Total pris: ";
echo $total;
?>
</div>
</div>

</body>
</html>
