<?php

$databasenavn="aadnehh";
$vert = "mysql-ait.stud.idi.ntnu.no";
$bruker = "aadnehh";
$passord = "ZS5CWuGl";
$db = mysqli_connect($vert, $bruker, $passord, $databasenavn);


if (!$db) {
  die("Kobling feilet: " . mysqli_connect_error());
}

?>
