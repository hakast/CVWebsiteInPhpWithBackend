<html>
<!--MENYN HÄMTAS FRÅN DEN HÄR FILEN-->
<head>
</head>
  <body>
    <nav class="clearfix">
      <center>
        <ul class="clearfix">
          <li><a href="menu.php?page=index">Hem</a></li>
          <li><a href="menu.php?page=cv">Curric. Vitae</a></li>
          <li><a href="menu.php?page=portfolio">Portfolio</a></li>
          <li><a href="menu.php?page=timer">Timer/KYH</a></li>
          <li><a href="menu.php?page=kontakt">Kontakt</a></li>
        </ul>
      </center>
      <a href="#" id="pull">Meny</a>
    </nav>

<!--PHP. HÄMTAR MENY MED _GET METODEN-->
      <?php
      //if (isset($_POST ["page"]))//tar bort: Notice: osv...
      $page = $_GET['page'];
      $pages = array('index', 'cv', 'portfolio', 'timer', 'kontakt');
      if (!empty($page)) {
          if(in_array($page,$pages)) {
              $page .= '.php';
              include($page);
          }
          else {
              echo 'Sidan hittades inte. Tillbaka till 
		          <a href="index.php">Startsidan</a>';
          }
      }
      else {
          include('index.php');
      }
      ?>

<!--SCRIPT TILL MENY-->
      <script>
    $(function () {
      var pull = $('#pull');
      menu = $('nav ul');
      menuHeight = menu.height();
      $(pull).on('click', function (e) {
        e.preventDefault();
        menu.slideToggle();
      });
      
      $(window).resize(function () {
        var w = $(window).width();

        //Ursprungliga värdet var :hidden
        if (w > 320 && menu.is(':hidden ')) {
          menu.removeAttr('style');
        }
      });
    });
      </script>
  </body>
  </html>