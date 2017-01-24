<?php
//DET HÄR ÄR SIDAN MED INLOGGNINGSKNAPP

include('admin/login.php');
//login filen

if(isset($_SESSION['login_user'])){
	
	header("location: admin/profile.php");
	
}

?>
<!doctype html>
<html lang="sv-se">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html" />
    <title>Håkan Åström</title>

<!--LÄNK TILL FAVICON-->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <script src="js/jquery-1.7.2.min.js"></script>

<!--STYLING-->
    <link rel="stylesheet" type="text/css" href="css/loginform.css" />
    <link rel="stylesheet" type="text/css" href="css/postSlider.css" media="all" />
    <link rel="stylesheet" href="css/meny.css" />
    <link rel="stylesheet" type="text/css" href="css/styleSheet.css" /> 

<!--GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Poiret+One" rel="stylesheet" />
 
</head>
<body>

<!--INKLUDERAR MENYN PÅ SIDAN-->
  <?php require_once ('menu.php')?>

    <div class="row"></div>
    <div class="row">
        <center>
            <div class="col-4">
                <div id="textIndex">
                Håkan Åström Frontend Developer
                </div>
            </div>
            <div class="col-8 row">
                <img class="rundBild"  src="images/hakan1.gif" width="70%" alt="hakan" />
                <br />
            </div>
        </center>
    </div>
    <br /> 

<!--//LOGINFORMULÄR-->
<button id="loginbutton"onclick="document.getElementById('id01').style.display='block'" style="width:50px; height:39px">Admin</button>

<div id="id01" class="modal">  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/admin.jpg" style="width:200px;" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Användarnman</b></label>
      <input type="text" placeholder="Användarnamn: admin" name="username" required>

      <label><b>Lösenord</b></label>
      <input type="password" placeholder="Lösenord: admin" name="password" required>       
      <button name="submit" type="submit">Logga in</button>
      
      <input type="checkbox" checked="checked"> Kom ihåg mig
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Avbryt</button>
    </div>
  </form>
</div>

<!--//INKLUDERAR FOOTER-->
    <?php include('includes/footer.php');
?>

<!--ACCESSKEY TILL HANGMAN. (CHROME = alt + h) (FIREFOX = shift + alt + h) -->
<a id="hang" href="http://v3.hakanastrom.se/hangman/hangman.html"></a><br>

<script>
document.getElementById("hang").accessKey = "h";
</script>

<!--SCRIPTET ÄR NEDLADDDAT OCH VISAR SOCIALA MEDIER-KNAPPAR-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57f11e36d003b2e7"></script>
</body>
</html>
