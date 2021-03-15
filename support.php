<!-- Author -->
<!-- Dawid Benda -->


<!DOCTYPE HTML>
<html lang="pl">

  <head>
    
     <meta charset="utf-8" />
     <meta name="description" content="Polski Serwer MT2">
     <meta name="keywords" content="Metin,TibijskiMT2,Tibia,Prywatny,Serwer,Support,Pomoc,error,błąd">
     <meta name="author" content="Dawid Benda">
     <link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon-32x32.png">
     <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@300&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="wygladSupport.css">
     <link rel="stylesheet" href="ikonki/css/f.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Tytul zakladki -->
     <title>Support TibijskiMT2 - Serwer Metin 2!</title>   
     
  </head>
  
  
  
  <body>

    <div class="pasekNawigacji" style="text-transform: uppercase;">
        <ul>
            <li><a href="strona.php">Home</a></li>
            <li><a href="rejestracja.php">rejestracja</a></li>
            <li><a href="ranking.php">ranking</a></li>
            <li><a href="pobierz.html">pobierz</a></li>
            <li><a href="eventy.html">eventy</a></li>
            <li><a class="active" href="support.php">support</a></li>
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

        <form action="wyslijZgloszenie.php" method="post">
                <div class="topBar">
                    <div class="napisSupport">
                        <p>Support</p><br/><br/>
                    </div>
                    <div class="contentAktualnosci">
                        <h3>Wypełnj formularz zgłoszeniowy (wymagany jest adres e-mail): </h3>
                        <br/>
                        <p>Podaj e-mail</p>
                        <input type="text" name="supportEmail">
                            <div class="opisSyt">
                                <p>Opisz sytuacje</p>
                                <input type="text" name="supportOpis">
                            </div>
                        <input style="width:100px;;color: white;   background-color: #4CAF50;font-weight: bold;font-size: 14px;padding: 8px;text-transform: uppercase;letter-spacing: 1px;font-family: 'Reggae One', cursive;cursor:pointer;" type="submit" value="Wyślij">
                    </div>
                </div>
        </form>
    </div>

    <div id="footer">
        <p>Zarejestruj się i zacznij przygodę już teraz! &copy;</p>
    </div>

  </body>  
    
</html>