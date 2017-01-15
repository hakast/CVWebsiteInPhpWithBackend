<?php
//DEN HÄR FILEN SYNS INTE I WEBBLÄSAREN

include ('config.php'); //Inkluderar databas login info
session_start(); 				//Startar ny session

$error='';
if (isset($_POST['submit'])) { //Koll om logga in knapp klickats
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error= "Användarnamn eller lösenord är ogiltigt";
  }
  else
  {

//Hämtar login info från hemsidan. Lagrar i variabel
    $username=$_POST['username'];
    $password=$_POST['password'];

//Ansluter till servern
$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbdatabas);

//Koll om anslutning till server funkar, om inte: felmeddelande.
if (!$connection) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
  }

//Skydd mot hackare
    $username = stripslashes($username); //Tar bort slash
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($connection, $username); //Tar bort farliga strängar
    $password = mysqli_real_escape_string($connection, $password);

//Kontrollerar om username och password finns i databasen o sparar det i $query
		$query = mysqli_query( $connection, "SELECT * FROM login WHERE password='$password' AND username='$username'");

//Kontroll om $query har info från databasen
		if (mysqli_num_rows($query) == 1) {
			$_SESSION['login_user'] = $username; //Sätter key till login_user och value till $username
			header("location: profile.php"); //
		}

		else
		{
			$error= "Användarnamn eller lösenord är ogiltigt";
		}
		mysqli_close($connection);
	}
}

?>
