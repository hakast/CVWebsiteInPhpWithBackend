<!doctype html>
<html lang="sv-se">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Timer</title>
  <script src="js/jquery-1.7.2.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--LÄNK TILL FAVICON -->
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">

<!--STYLING-->
  <link rel="stylesheet" type="text/css" href="css/postSlider.css" media="all" />
  <link rel="stylesheet" href="css/meny.css">
  <link rel="stylesheet" type="text/css" href="css/styleSheet.css">
  <link rel="stylesheet" type="text/css" href="css/timer.css"><!--kod till timern-->

<!--GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Poiret+One" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body style="background-image:url(images/kyh.JPG); background-size: 20%;">

<!--INKLUDERAR MENYN PÅ SIDAN-->
  <?php require_once ('menu.php')?>
        
  <!--EN TOM DIV FÖR ATT FÅ ETT MELLANRUM-->
  <div style="height:160px;" class="row">
    <div class="col-12">
    </div>
  </div>

<!--RÄKNARE-->
  <center>
  <div id='ruta' style='border-width:1px; border-color:gray; border-style:solid; width:40%; 
  border-radius: 10px; padding-bottom:20px; background-color:yellow; opacity:0.95;
  box-shadow: 10px 10px 10px #333333;' class="row" >
    
    <div class="col-12 ">
      <div id="googlePoiret" style='color:black' ><center><span id="clock"></span>dagar till praktik</center></div>
      <div id="googlePoiret" style='color:black' ><center><span id="clockTwo"></span>dagar till examen</center></div>
    
    </div>
  </div>
  </center>

  </div>

  <!--INCLUDE TILL FOOTER-->
  <?php include('includes/footer.php'); ?>

<!--SCRIPTET ÄR NEDLADDDAT OCH VISAR SOCIALA MEDIER-KNAPPAR-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57f11e36d003b2e7"></script>
  <script src="js/timer.js"></script>
</body>
</html>
