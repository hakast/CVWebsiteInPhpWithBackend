<!doctype html>
<html lang="sv-se">
<head>
  <title>Individuellt Projekt</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <script src="js/jquery-1.7.2.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!--för att menyn ska vara mobil optimerad-->

<!--LÄNK TILL FAVICON-->
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">

<!--STYLING-->
  <link rel="stylesheet" type="text/css" href="css/postSlider.css" media="all" />
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/meny.css">

<!--GOOGLE FONTS-->
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Poiret+One" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

</head>
<body>
<!--INKLUDERAR MENYN PÅ SIDAN-->
  <?php require_once ('menu.php')?>
  <center><p style='color: dimgray;' id="googlePoiret">Egenskaper och färdigheter</p></center>

<!--NEDLADDAD KOD SOM JAG ÄNDRAT. KARUSELL MED RUTOR BÖRJAR HÄR-->
  <div id="w">
    <nav class="slidernav">
      <div id="navbtns" class="clearfix">
        <a href="#" class="previous"><</a>
        <a href="#" class="next">></a>
      </div>
    </nav>
    <div class="crsl-items" data-navigation="navbtns">
      <div class="crsl-wrap">
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="images/postSlider/utb.png" alt="utbild o komp">
            <span class="postdate">Feb 16, 2014</span>
          </div>

<!--BLÄDDERBARA RUTOR MED BILD OCH LÄS MER-LÄNK-->
<!--Utbildning-->
          <h3>Utbildning och kompetens</h3>
          <p>Här berättar jag lite mer om utbildning och arbetslivserfarenheter.</p>
          <p class="readmore"><a href="utbild.php" onClick='openRequestedPopup(this.href); return (false)' target="_blank">Läs mer &raquo;</a></p>
        </div>
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="images/postSlider/pencil.png" alt="penna">
            <span class="postdate">Okt 30, 2016</span>
          </div>

<!--Bakgrund-->
          <h3>Bakgrund</h3>
          <p>Skogsarbetare från Norrlands djupa skogar med intresse för programmering.</p>
          <p class="readmore"><a href="bakgrund.php" onClick='openRequestedPopup(this.href); return (false)' target="_blank">Läs mer &raquo;</a></p>
        </div>

        <div class="crsl-item">
          <div class="thumbnail">
            <img id="byra" src="images/postSlider/byra.png" alt="byra" onclick="imageClick('http://hakvik.se' )">
            <span class="postdate">Nov 1, 2016</span>
          </div>

<!--Byrå siffra och grafik-->
          <h3>Byrå Siffra & Grafik</h3>
          <p>Fram till utbildningen vid KYH började drev jag min enmans marknadsföringsbyrå</p>
          <p class="readmore"><a href="byra.php" onClick='openRequestedPopup(this.href); return (false); target="_blank"'>Läs mer &raquo;</a></p>
        </div>

        <div class="crsl-item">
          <div class="thumbnail">
            <img src="images/postSlider/hantlar.png" alt="Hälsa o träning">
            <span class="postdate">Nov 02, 2016</span>
          </div>

<!--Hälsa o träning-->
          <h3>Hälsa och träning</h3>
          <p>Jag tränar styrketräning jag för att hålla mig frisk, inte för att bli störst.</p>
          <p class="readmore"><a href="halsa.php" onClick='openRequestedPopup(this.href); return (false)' target="_blank">Läs mer &raquo;</a></p>
        </div>
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="images/postSlider/livboj.jpg" alt="Fritid">
            <span class="postdate">Nov 03, 2016</span>
          </div>

<!--Fritidsintressen-->
          <h3>Fritidsintressen</h3>
          <p> Huvusakligen två: programmering och långsegling.</p>
          <p class="readmore"><a href="fritid.php" onClick='openRequestedPopup(this.href); return (false)' target="_blank">Läs mer &raquo;</a></p>
        </div>
      </div><!-- @end .crsl-wrap -->
    </div><!-- @end .crsl-items -->
  </div><!-- @end #w -->

<!--SCRIPT SOM HANTERAR KARUSELLEN--->
  <script type="text/javascript">
    $(function () {
      $('.crsl-items').carousel({
        visible: 3,
        itemMinWidth: 180,
        itemEqualHeight: 370,
        itemMargin: 9,
      });
      $("a[href=#]").on('click', function (e) {
        e.preventDefault();
      });
    });
  </script>

<!--EGET SCRIPT FÖR ATT ÖPPNA SMÅ WINDOWS POP UP FÖNSTER-->
  <script type="text/javascript">
    var windowObjectReference = null;
    function openRequestedPopup(strUrl, strWindowName) {
      if (windowObjectReference == null || windowObjectReference.closed) {
        windowObjectReference = window.open(strUrl, strWindowName,
               "width=520px, height=400px");
      } else {
        windowObjectReference.focus();
      };
    }
  </script>

  <!--INKLUDERAR FOOTER--->
  <?php include('includes/footer.php'); ?>

  <!--SCRIPTET ÄR NEDLADDDAT OCH VISAR SOCIALA MEDIER-KNAPPAR-->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57f11e36d003b2e7"></script>

  <!--SCRIPT TILL BLÄDDRA RUTOR I KARUSELLEN-->
  <script type="text/javascript" src="js/responsiveCarousel.min.js"></script>
</body>
</html>