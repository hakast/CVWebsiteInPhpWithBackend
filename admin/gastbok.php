<?php session_start();   ?> <!-- SESSIONS SKA ALLTID VARA FÖRST I FILEN-->
<!doctype html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Poiret+One" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <title>Admin</title>
<style>
    .entry {
      border: 1px solid;
      margin: 10px;
      padding: 10px;
      border-radius: 10px;
      border-color: #b4afaf;
      color: #000000;
    }

    body {
      font-family: 'Poiret one', regular;
      text-align: left;
      color: #000000;
      font-size: 100%;
      line-height: 2;
      background: url('images/background2.png');
    }

    .poirot {
      font-family: 'Poiret one', regular;
      text-align: left;
      font-size: 40px;
      color: #4d4848;
    }

    #rutor {
      display: inline-block;
      vertical-align: middle;
      margin-left: 10px;
      width: 200px;
      border-radius: 5px;
    }

    textarea {
      width: 200px;
      height: 100px;
      background-color: #d1cece;
      border-radius: 10px;
    }
  </style>
</head>

<body> 

</body>
</html>

    <?php
//INKLUDERAR DATABASUPPGIFTERNA, MENY
    include('config.php');
    include('meny.php');    
 

//$db = mysqli_connect('guestbook-219308.mysql.binero.se', '219308_eb63405', 'Augusti144', '219308-guestbook'); // Koppla upp till databasen

                $db = mysqli_connect('localhost', 'root', '', '219308-guestbook');

 
            if( isset($_POST['id']) ){
 
                $id = $_POST['id'];
 
                $query = "
                    DELETE FROM entries
                    WHERE id = $id
                "; // Här skapar vi en SQL-fråga som tar bort ett inlägg med ett visst 'id'
 
                mysqli_query($db, $query); // Här skickar vi SQL-frågan vi skapade till databasen så att 
                                           //inlägget försvinner
            }
 
            if( isset($_GET['search']) ){ // Om vi får en GET-variabel via URL:en som heter 'search'
 
                $search = $_GET['search'];
                 
                $search_query = "
                    WHERE message LIKE '%$search%'
                    OR sender LIKE '%$search%'
                "; // Här skapar vi en del av en SQL-fråga som gör ett urval av bara 
                   //de inlägg som matchar sökningen i antingen meddelandet eller i avsändarens namn
             
            }else{
                $search_query = ""; // om vi inte fått en sökning sätter vi "sök delen" av SQL-frågan till tomt
            }
 
            $query = "
                SELECT * 
                FROM entries
                $search_query
                ORDER BY date DESC
            "; // här skapas en SQL-fråga som hämtar alla inlägg med det senaste först. det finns även en 
               //variabel $search_query som vi skapade ovan och som är beroende av sökningen vi skrev
 
            $result = mysqli_query($db, $query); // här skickar vi frågan för att hämta inläggen till databasen
 
            while( $row = mysqli_fetch_assoc($result) ){ // Eftersom vi inte vet antal rader vi får som svar 
                //kör vi en while-loop som tar en rad i taget och lägger i $row som då blir en array med alla 
                //värden i den raden där nycklarna har samma namn som kolumnerna i tabellen i databasen

                echo "                
               
                    <div class='entry'>
                        <p>{$row['date']}</p>
                        <p><strong>Meddelande: </strong>{$row['message']}</p>
                        <p><strong>Avsändare: </strong>{$row['sender']}</p>
                        <p><strong>Telefon: </strong>{$row['phone']}</p>
                        <p><strong>Mail: </strong>{$row['email']}</p>
                        
                        <form method='post' action=''>
                        <input type='hidden' name='id' value='{$row['id']}'>
                        <input type='submit' value='Ta bort'>
                        </form>
                    </div>
                "; 
            }



