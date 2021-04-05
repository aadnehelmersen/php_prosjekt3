<?php
include ("config.php");
session_start();


if ( !isset($_POST['username'], $_POST['password']) ) {

	exit('Fyll ut brukernavn og passord!');
}

if ($stmt = $db->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();

	$stmt->store_result();
  if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();

	if ($_POST['password'] === $password) {

		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		header('Location: admin.php');
	} else {

		echo 'Feil brukernavn eller passord!!';
	}
} else {

	echo 'Feil brukernavn eller passord!!';
}


	$stmt->close();
}
?>
