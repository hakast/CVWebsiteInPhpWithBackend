<!doctype html>
<html lang="sv-se">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!--SCRIPT-->
  <script src="js/jquery-1.7.2.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!--Behövs till tabs-->

  <!--LÄNK TILL FAVICON-->
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">

  <!--STYLING-->
  <link rel="stylesheet" type="text/css" href="css/postSlider.css" media="all" />
  <link rel="stylesheet" href="css/meny.css">
  <link rel="stylesheet" type="text/css" href="css/styleSheet.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"><!--Style tabbar portfolio-->

  <!--GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Poiret+One" rel="stylesheet">

  <!--SCRIPT TILL FLIKAR/TABS-->
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>

</head>
<body>

<!--INKLUDERAR MENYN PÅ SIDAN-->
  <?php require_once ('menu.php')?>
<div class="row">
<div class="col-12"><p></p><p></p><p></p></div>
</div>
    
<!--FLIKAR/TABS FÖR PORTFOLIO-->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Joomla</a></li>
    <li><a href="#tabs-2">Trycksaker</a></li>
    <li><a href="#tabs-3">Enkäter</a></li>
    <li><a href="#tabs-4">Video</a></li>
  </ul>

<!--FÖRSTA FLIKEN-->  
  <div id="tabs-1">
      <div class="row">
        <center>
            <div class="col-4">
                <div style="font-size:6em; " id="googlePoiret"><center>Hemsidor i</center></div>
                <p></p><p></p>
                <img src="images/pdf/joomla.jpg" width="30%" alt="Joomla" />   
                <br>            

            </div>
            <div id='hemByra' class="col-4">
                <script>$("#hemByra").wrap("<a href='http://hakvik.se/'>"); </script>
                <img style='border-width:1px; border-style:solid;' 
                src="images/portfolio/port_byra.jpg" width="80%" alt="byra" /><!--Klickbar bild-->
            </div>

            <div id='batbild' class="col-4">
                <script>$("#batbild").wrap("<a href='http://hakvik.se/z'>");</script>
                <img style='border-width:1px; border-style:solid;' 
                src="images/portfolio/port_segla.jpg" width="80%" alt="bat" /><!--Klickbar bild-->
                <br />
            </div>
        </center>
    </div>    
    <br /> 
  </div>

<!--ANDRA FLIKEN--> 
  <div id="tabs-2">
         <div class="row">
        <center>
            <div class="col-4">
                <div style="font-size:6em; " id="googlePoiret">Trycksaker <span style="font-size:0.5em; color:gray;"><br>
                Indesign Illustrator Photoshop ...</span></div>
            </div>

            <div id="g2" class="col-2"> <!--Klickbar div-->
            <!--$('--><a href="http://www.v3.hakanastrom.se/images/pdf/WebbG2Skolkatalog.pdf">
            <img src="images/pdf/thumb_g2.JPG" width="80%" alt="g2" /></a>'<!--).appendTo('#g2') -->                 
            </div>

            <div id="arsr" class="col-2"> <!--Klickbar div-->
            <!--$('--><a href="http://www.v3.hakanastrom.se/images/pdf/ArsredoHassleholm.pdf">
            <img src="images/pdf/thumb_arsredo.JPG" width="80%" alt="arsredovisning" /></a>'<!--).appendTo('#arsr')-->                  
            </div>

            <div id="hass" class="col-2"> <!--Klickbar div-->
            <!--$('--><a href="http://www.v3.hakanastrom.se/images/pdf/KvalitetAldreomsorg.pdf">
            <img src="images/pdf/thumb_kvalitet.PNG" width="80%" alt="kvalitet" /></a>'<!--).appendTo('#hass')-->                  
            </div>
            
            <div id="lp" class="col-2"> <!--Klickbar div-->
           <!-- $('--><a href="http://www.v3.hakanastrom.se/images/pdf/LP_Behandlingsplan.pdf">
            <img src="images/pdf/thumb_lp.JPG" width="80%" alt="Karlshamn" />  </a>'<!--).appendTo('#lp')-->                  
            </div>
        </center>
    </div>    
    <hr><p></P>
    <center><p style="color:gray;">Under 15 års tid har jag formgett trycksaker av olika slag: 
    tidningar, kommunalt informationsmaterial, magasin, foldrar, reklammaterial och 
    mycket annat. </p></center>
  </div>

<!--TREDJE FLIKEN--> 
  <div id="tabs-3">
         <div class="row">
        <center>
            <div class="col-3">
                <div style="font-size:6em; " id="googlePoiret">Statistik om unga <span style="font-size:0.5em; color:gray;"><br>Indesign Illustrator Photoshop SPSS ...</span></div>
            </div>

            <div id="ben" class="col-3"> <!--Klickbar div-->
            <!--$('--><a href="http://www.v3.hakanastrom.se/images/pdf/WebbLulea2014.pdf">
            <img src="images/pdf/thumb_lulea.JPG" width="50%" alt="Bengtsfors" /> </a>'<!--).appendTo('#ben')-->                  
            </div>

            <div id="ben" class="col-3"> <!--Klickbar div-->
            <!--$('--><a href="http://www.v3.hakanastrom.se/images/pdf/WebbBengtsfors11.pdf">
            <img src="images/pdf/thumb_bengts.JPG" width="50%" alt="Bengtsfors" /> </a>'<!--).appendTo('#ben')-->                  
            </div>

            <div id="kar" class="col-3"> <!--Klickbar div-->
            <!--$('--><a href="http://www.v3.hakanastrom.se/images/pdf/WebbKarlshamn2012.pdf">
            <img src="images/pdf/thumb_karls.JPG" width="50%" alt="Karlshamn" /> </a>'<!--).appendTo('#kar')-->                  
            </div>
        </center>
    </div>    
    <hr><p></p>
    <center><p style="color:gray;">Totalt har jag skrivit, analyserat och formgett 
    ungdoms-enkäter utifrån statistiska rådata för ett 30-tal svenska kommuner.</p></center>
  </div>

  <!--FJÄRDE FLIKEN VIDEO--> 
  <div id="tabs-4">
         <div class="row">
        <center>
           <iframe width="420" height="315"
                src="https://www.youtube.com/embed/OoRn9i1E8x8">
            </iframe>
            <iframe width="420" height="315"
                src="https://www.youtube.com/embed/oieCTyquWkE">
            </iframe>
        </center>
    </div>    
    <hr><p></p>   
  </div>
  
  <!--INKLUDERAR FOOTER-->
  <?php include('includes/footer.php'); ?>

  <!--SCRIPTET ÄR NEDLADDDAT OCH VISAR SOCIALA MEDIER-KNAPPAR---->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57f11e36d003b2e7"></script>
</body>
</html>
