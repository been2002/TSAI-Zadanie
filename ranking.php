<!-- Author -->
<!-- Dawid Benda -->


<!DOCTYPE HTML>
<html lang="pl">

  <head>
    
     <meta charset="utf-8" />
     <meta name="description" content="Polski Serwer MT2">
     <meta name="keywords" content="Metin,TibijskiMT2,Tibia,Prywatny,Serwer,Ranking,top,top10">
     <meta name="author" content="Dawid Benda">
     <link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon-32x32.png">
     <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@300&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="wygladRanking.css">
     <link rel="stylesheet" href="ikonki/css/f.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Tytul zakladki -->
     <title>Ranking TibijskiMT2 - Serwer Metin 2!</title>   
     
  </head>
  
  
  
  <body>
     
    <?php
      $do_bazy = mysqli_connect('localhost','root','','tibijskimt2');
          
      $zapytanie = mysqli_query($do_bazy, 'SELECT * FROM daneokoncie');
    ?>
    <div class="pasekNawigacji" style="text-transform: uppercase;">
        <ul>
            <li><a href="strona.php">Home</a></li>
            <li><a href="rejestracja.php">rejestracja</a></li>
            <li><a class="active" href="ranking.php">ranking</a></li>
            <li><a href="pobierz.html">pobierz</a></li>
            <li><a href="eventy.html">eventy</a></li>
            <li><a href="support.php">support</a></li>
            <li><a href="forum.html">forum</a></li>
            <li class="active" style="float:right"><a href="strona.php">Powrót</a></li>
            <div class="socialMedia">
                <div class="yt">
                    <li style="float:right"><a href="https://www.youtube.com/user/metin2/featured" target="_blank"><i class="icon-youtube-play">Youtube</i></a></li>
                </div>
                
                <div class="ig">
                    <li style="float:right"><a href="https://www.instagram.com/metin2/" target="_blank"><i class="icon-instagram">Instagram</i></a></li>
                </div>
                
                <div class="fb">
                    <li style="float:right"><a href="https://www.facebook.com/metin2fan" target="_blank"><i class="icon-facebook-squared">Facebook</i></a></li>
                </div>
            </div>
        </ul>   
    </div>
        
    <div id="wrapper"> 
        <div id="naglowekMT2">
            <h1>TibijskiMT2</h1>
        </div>
        
        <form action="login.php" method="post">
        <div id="napisRanking">
            <h1>Ranking - TOP10</h1>
        </div>
          
           <div class="content">
                <table>
                    <tr style="font-family: 'Reggae One', cursive;">
                        <td>#</td>
                        <td>Nick:</td>
                        <td>Flaga:</td>
                        <td>Level:</td>
                    </tr>
                    
                    <?php
                    while($wiersze = mysqli_fetch_row($zapytanie)){
                        echo "<tr>";
                        echo "<td>$wiersze[0]</td>";
                        echo "<td>$wiersze[1]</td>";
                        echo "<td>$wiersze[2]</td>";
                        echo "<td>$wiersze[3]</td>";
                        echo "</tr>";
                    }
                    mysqli_close($do_bazy);
                    ?>
                </table> 
           </div>

        </form>
        
    </div>

    <div id="footer">
        <p>Zarejestruj się i zacznij przygodę już teraz! &copy;</p>
    </div>

  </body>  
    
</html>