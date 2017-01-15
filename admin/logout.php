<?php
session_start();

if (session_destroy()) { // stänger sessionen
	header("Location: ../index.php");// tillbaks till logga in-sidan
}
?>