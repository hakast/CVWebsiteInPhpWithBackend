<!DOCTYPE html>
<html>
<?php
//INKLUDERAR DATABASUPPKOPPLINGEN
include('./admin/config.php');


//TILLDELAR UPKOPPLINGEN EN VARIABEL, STÄLLER EN FRÅGA, SPARAR SVARET I EN VARIABEL
$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbdatabas);

$query = mysqli_query($connection, "SELECT * FROM tablebakgrund WHERE id=1");

$result = mysqli_fetch_assoc($query);

?>

<!--HEAD-TAGG MED LÄNKAR TILL BLA CSS-FILEN-->    
<head>
    <title>Bakgrund</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/styleSheet.css">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Poiret+One" rel="stylesheet">

</head>
<body style="background-image:none">

<!--GOGGLE ÖVERSÄTTNING-->
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'sv', includedLanguages: 'de,en,es,fr,ru,sv', layout: google.translate.TranslateElement.FloatPosition.BOTTOM_LEFT}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>      
    
    <?php
//SKRIVER UT DET SOM FÖR NÄRVARANDE FINNS I AKTUELL TABELL OCH KOLUMN I DB
echo $result ["colbakgrund"];

?>
</body>
</html>
