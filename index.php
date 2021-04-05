
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bilkonfigurator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <link rel="stylesheet" type="text/css" href="bilkonfig.css">
 <script src="bilkonfig.js"></script>


</head>
<body>

<div class="header">
  <h1>Bilkonfigurator</h1>
  <p>På denne siden kan du velge hvordan bilen din skal se ut på utsiden!</p>
	<a href="logginn.php">Logg inn</a>
	<a href="prisliste.php">Prisliste</a>
  <a href="admin.php">Admin</a>
</div>

<div class="content">


    <form class="skjema"  method="POST" action="bilkonfig2.php">

      <label for="fornavn">Fornavn:</label><br>
      <input type="text" name="fornavn" value="" id="fornavn" required><br> <p></p>
      <label for="etternavn">Etternavn:</label><br>
      <input type="text" name="etternavn" value="" id="etternavn" required><br>
      <p></p>

      <select name="farge" id="farge" required>
        <option value="" disabled selected>Velg farge for bilen</option>
        <option value="rod lakk">Rød</option>
        <option value="blaa lakk">Blå</option>
        <option value="hvit lakk">Hvit</option>
      </select>
      <p>

      <select name="hjulstorrelse" id="hjulstorrelse" required>
        <option value="" disabled selected>Velg hjulstørrelse for bilen</option>
        <option value="18 tommer felg">18"</option>
        <option value="20 tommer felg">20"</option>
        <option value="22 tommer felg">22"</option>
      </select>
      <p>

      <select name="felg" id="felg" required>
        <option value="" disabled selected>Velg felgtype for bilen</option>
        <option value="5v felg">5V-eiker</option>
        <option value="turbin felg">5-arms turbin</option>
      </select>
      <p></p>


    	<p>Karosseriet på bilen ser nå slik ut:</p>
      <img id="image" src="bilder/rod lakk.jpg" height="200"><p>
        <p>Bilen leveres med disse felgene:</p>

      <img id="felg2" src="bilder/5v felg.png" height="200"><p>
    <p>Priser:</p>
    <div id="result"></div>
    <div id="result1"></div>
    <div id="result2"></div>
    <input type="submit" value="Gå videre til interiør" name="lagre1">
    </form>





</div>

</div>

</body>

<script type="text/javascript">

var changeCarImage = function () {
  document.getElementById('image').src = "bilder/" + this.options[this.selectedIndex].value + ".jpg"
}

var farge = document.getElementById('farge');
farge.addEventListener('change', changeCarImage, false);


var changeFelgImage = function () {
  document.getElementById('felg2').src = "bilder/" + this.options[this.selectedIndex].value + ".png"
}
var felg = document.getElementById('felg');
felg.addEventListener('change', changeFelgImage, false);
</script>
</html>
