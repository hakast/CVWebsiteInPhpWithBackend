<!doctype html>
<html lang="sv-se">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Kontakt</title>
  <script src="js/jquery-1.7.2.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!--LÄNK TILL FAVICON -->
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">

<!--STYLING-->
  <link rel="stylesheet" type="text/css" href="css/postSlider.css" media="all" />
  <link rel="stylesheet" href="css/meny.css">
  <link rel="stylesheet" type="text/css" href="css/styleSheet.css">

<!--GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Poiret+One" rel="stylesheet">

<!--STYLING TILL DE INLÄGG SOM SKRIVS I GÄSTBOKEN-->
  <style>
    .entry {
      border:1px solid;
      margin-left: 10px;
      margin-top:35px;
      padding: 10px;
      border-radius: 7px;
      border-color: dimgray;
      color: #dimgray;
      background-color:white;
      opacity:0.6;
      width: 95%;
    }

    body {
      font-family: 'Poiret one', regular;
      text-align: left;
      color: #000000;
      font-size: 100%;
      line-height: 2;
    }

    #rutor {
      display: inline-block;
      vertical-align: middle;
      margin-left: 10px;
      margin-bottom:5px;
      width: 95%;
      height:40px;
      border-radius: 5px;
      color: dimgray;
      font-size: 0.8em;
    }

    fieldset{
      border: 5px solid #46a28d;
      border-radius:7px;
      padding-bottom:10px;
    }

    textarea {
      width: 95%;
      height: 100px;
      margin-left: 10px;
      background-color: #ebe6e6;
      border-radius: 5px;
      color: dimgray;
      font-size: 2em;
    }
  </style>
</head>
<body>
<?php require_once ('menu.php');
?>
<?php include('mailto.php');
?>

<div class="row">
    <div class="col-12">
      <iframe width="100%" height="200px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJF6E38hl4X0YRINyiKceyQpw&key=AIzaSyAhdT3yCAXwrelwpC0-t3VD1bkpS8i_d-w" allowfullscreen></iframe>
    </div>
</div>
<br />
<div class="row">
  
<!-- PRIVAT MEDDELANDE-->
    <div class="col-3">
      <form method='post' action="mailto.php">
        <fieldset>
        <legend id="googlePoiret" style='font-size:35px; font-weight:bold; margin-top:-10px;'>Mail</legend>
        <input id='rutor' type='text' placeholder='Namn' name='first_name' /><br />
        <input id='rutor' type='text' placeholder='Telefon' name='telephone' /><br />
        <input id='rutor' type='text' placeholder='Mail' name='mailPrivat' /><br /><br />
        <textarea placeholder='Skriv meddelande' name='comments'></textarea><br>
        <input id='rutor' type='submit' style='background-color:#46a28d; color:white' value='Skicka privat meddelande!' />
        </fieldset>
      </form>
    </div> 

<!--PUBLIK GÄSTBOK-->
   <div class="col-3">
      <form method='post' action=''>
        <fieldset>
        <legend id="googlePoiret" style='font-size:35px; font-weight:bold;margin-top:-10px;'>Gästbok </legend>
        <input id='rutor' type='text' placeholder='Namn' name='sender' /><br />
        <input id='rutor' type='text' placeholder='Telefon' name='phone' /><br />
        <input id='rutor' type='text' placeholder='Mail' name='email' /><br /><br />
        <textarea name='message' placeholder='Skriv inlägg'></textarea><br>
        <input id='rutor' onclick="gastbokAlert()" type='submit' style='background-color:#46a28d; color:white' value='Posta inlägg i gästboken!' />
        </fieldset>
      </form>
    </div>     

<!--SCRIPT FÖR ALERT VID KLICK PÅ "POSTA INLÄGG"-->
<script>function gastbokAlert() {alert("Ditt inlägg är postat i gästboken!");}</script>

<div class="col-6">
  <?php
//UPPKOPPLING MOT DATABASEN
//$db = mysqli_connect('guestbook-219308.mysql.binero.se', '219308_eb63405', 'Augusti144', '219308-guestbook');

$db = mysqli_connect('localhost', 'root', '', '219308-guestbook');


//KOLL OM NEDANSTÅENDE FÄLT SKICKATS. SPARA I VARSIN VARIABEL
if( isset($_POST['message']) && isset($_POST['sender']) && isset($_POST['phone']) && isset($_POST['email'])){

// SKYDD MOT INJECTIONS	
  $message = mysqli_real_escape_string ($db, $_POST['message']);	
  $sender = mysqli_real_escape_string ($db, $_POST['sender']);	
  $phone = mysqli_real_escape_string ($db, $_POST['phone']);
  $email = mysqli_real_escape_string ($db, $_POST['email']);
	
	
	//F	ORMULERA EN FRÅGA TILL DATABASEN
	$query = "
            INSERT INTO entries
            (date, message, sender, phone, email)
            VALUES
            (NOW(), '$message', '$sender', '$phone', '$email')
        ";
	
	
	//S	KICKA FRÅGAN TILL DATABASEN
	mysqli_query($db, $query);
	
	//e	cho "Skickat!";
	//T	og bort. Bytte till onclick på input ovan.
}


//SORTERA EFTER DATUM STIGANDE
$query = "
        SELECT *
        FROM entries
        ORDER BY date DESC
    ";


//HÄMTA RESULTATET OCH SKRIV UT DET SOM HTML
$result = mysqli_query($db, $query);

while( $row = mysqli_fetch_assoc($result) ){
	
	echo "
            <div class='entry'>
                <p>{$row['date']}</p>
                <p><strong>Meddelande: </strong>{$row['message']}</p>
                <p><strong>Avsändare: </strong>{$row['sender']}</p>
                <p><strong>Telefon: </strong>{$row['phone']}</p>
                <p><strong>Mail: </strong>{$row['email']}</p>
            </div>
        ";
	
}
;

?>
</div>
</div>

<!--INKLUDERAR FOOTER-->
  <?php include('includes/footer.php');
?>

<!--SCRIPTET ÄR NEDLADDDAT OCH VISAR SOCIALA MEDIER-KNAPPAR. www.addthis.com/dashboard -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57f11e36d003b2e7"></script>
</body>
</html>
