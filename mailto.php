<?php

if(isset($_POST['mailPrivat'])) {
	
	$email_to = "hakast@gmail.com";
	$email_subject = "Mail från individuella projektet";

function died($error) {		
		
//FELKOD OM NÅGOT GÅTT SNETT
		echo $error."<br />";
		echo "Klicka på backa-knappen för att göra dina ändringar.<br />";
		echo "Åtgärda det som blev fel och skicka igen!<br /><br />";
        die();
}
	
//VALIDERING ATT DATA MATATS IN
	if(!isset($_POST['first_name']) ||
    !isset($_POST['mailPrivat']) ||
    !isset($_POST['telephone']) ||
    !isset($_POST['comments'])) {
	died('Ledsen, något verkar ha gått fel då du fyllde i formuläret');
}
	
    $first_name = $_POST['first_name'];	
	$email_from = $_POST['mailPrivat'];	
	$telephone = $_POST['telephone'];	
	$comments = $_POST['comments'];
    $error_message = "";

//VALIDERING AV ATT EN KORREKT MAILADRESS MATATS IN    
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		
	if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Det verkar vara något fel på den mailadress du skrev in.<br />';
    }

//GÖR SÅ ATT DET ÄR OKAY ÄVEN MED Å, Ä, Ö
	$string_exp = "/^[A-Öa-ö .'-]+$/";	
	
	if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Det blev visst fel då du skrev in ditt namn.<br />';
    }
		
	if(strlen($comments) < 2) {
    $error_message .= 'Det verkar som att det blev fel någonstans i din kommentar. 
	Tips: Du måste skriva minst två tecken.<br />';
    }
		
	if(strlen($error_message) > 0) {
    died($error_message);
    }
		
	$email_message = "Form details below.\n\n";
    function clean_string($string) {
    
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }
	
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
	
//SKAPA HEADER FÖR MAIL	
	$headers = 'From: '.$email_from."\r\n".
	
	'Reply-To: '.$email_from."\r\n" .	
	'X-Mailer: PHP/' . phpversion();
		
	@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- TACKARTACKAR --> 
<script>alert('Tack för ditt meddelande, jag återkommer inom kort.')

<!--SKICKAR TILLBAKA TILL KONTAKT-SIDAN EFTER ALERTEN-->
window.location.href = 'http://www.v3.hakanastrom.se/menu.php?page=kontakt';
</script>

<?php
}
?>