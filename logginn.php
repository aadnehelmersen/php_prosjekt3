<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" type="text/css" href="bilkonfig.css">
</head>
<body>

  <div class="header">
    <a href="bilkonfig.php"><h1>Bilkonfigurator</h1></a>
    <p>På denne siden kan admin logge inn</p>


  </div>
<div class="content">


<form class="skjema" action="authenticate.php" method="post">
  <div class="imgcontainer">
    <img src="bilder/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Brukernavn</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="psw"><b>Passord</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <button type="submit">Logg inn</button>

  </div>


</form>
</div>
</body>
</html>
