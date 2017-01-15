<html>
  <head>
          <title>Admin utbildning</title>         
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">          
	</head>
  <body>
    </body>
  </html>

<?php
//INKLUDERAR SESSION, DATABASUPPGIFTERNA, MENY
    include('session.php');
    include('config.php');
    include('meny.php');

//TILLDELAR UPKOPPLINGEN EN VARIABEL, STÄLLER EN FRÅGA, SPARAR SVARET I EN VARIABEL
    $connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbdatabas);   
    $query = mysqli_query($connection, "SELECT * FROM tablebakgrund WHERE id=1");    
    $bakgrundText = mysqli_fetch_assoc($query);
    $columnText = $bakgrundText["colbakgrund"];
         
    if (isset($_POST['save'])) {            //Har submitknappen med namn "save" klickats?
      $columnText = $_POST["colbakgrund"];//I så fall spara colutbildning i variabel
      mysqli_query($connection, "UPDATE tablebakgrund 
        SET colbakgrund = '$columnText' WHERE id=1"); //Uppdatera databasens kolumn med det 
    }                                                   //sparades i var $columnText
?>
<!--NEDANSTÅENDE ÄR DET SOM SYNS PÅ ADMIN-SIDAN-->
<div class="container">
    <div>
        <div class="row">
            <div class="col-md-6">
               <h1>Bakgrund</h1> 
                <form method="post" enctype="multipart/form-data"> </br>

<!--PHP-koden sparar efter klick på "Spara" den nya texten på admin-sidan + att den sparas i db. Då man 
    uppdaterar den publika motsvarande sidan laddas den senast uppdaterade texten ned från db-->
                    <textarea name="colbakgrund" type="textarea" cols="120" rows="20">
                        <?php echo  $columnText; ?></textarea>                  
                    <br></br>
                  <input type="submit" style="background-color: white; color: black; font-size:33px"  name="save" value="Spara">
              </form>
                <p>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
