<!-- Author -->
<!-- Dawid Benda -->


<!DOCTYPE HTML>
<html lang="pl">

  <head>
    
     <meta charset="utf-8" />
     <meta name="description" content="Polski Serwer MT2">
     <meta name="keywords" content="Metin,TibijskiMT2,Tibia,Prywatny,Serwer,Rejestracja">
     <meta name="author" content="Dawid Benda">
     <link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon-32x32.png">
     <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@300&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="wygladRejestracja.css">
     <link rel="stylesheet" href="ikonki/css/f.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Tytul zakladki -->
     <title>Rejestracja TibijskiMT2 - Serwer Metin 2!</title>   
     
  </head>
  
  
  
  <body>
    <div class="pasekNawigacji">
        <ul>
            <li><a href="strona.php">Home</a></li>
            <li><a class="active" href="rejestracja.php">rejestracja</a></li>
            <li><a href="ranking.php">ranking</a></li>
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

    <div class="wrapper">
        <div id="naglowekMT2">
            <h1>TibijskiMT2</h1>
        </div>
        
        <form action="dodajUzytkownika.php" method="post">
            <div class="regNowCenter">
                <div class="napisRejestracja">
                    <p>Rejestracja / registration</p>
                </div>
                
                <div class="contentReg">
                    Podaj <br/>Nazwe użytkownika:<br/>
                        <input type="text" name="newNick"/><br/>
                    Podaj Login:<br/>
                        <input type="text" name="newLogin"/><br/>
                    Podaj Hasło:<br/>
                        <input type="password" name="newHaslo"/><br/>
                    Podaj E-mail:<br/>
                        <input type="text" name="newEmail"/><br/><br/>
                    <?php
                        $do_bazy = mysqli_connect('localhost','root','','tibijskimt2');

                        if(!$do_bazy){
                            exit("Nie udało się połaczyć do bazy!");
                        }
                        $usernick = $_POST['newNick'];
                        $login = $_POST['newLogin'];
                        $haslo = $_POST['newHaslo'];
                        $email = $_POST['newEmail'];
                        $dodaj = "INSERT INTO uzytkownicy VALUE (NULL,'$usernick','$login','$haslo','$email')";
                    
                        

                        $zapytanie = mysqli_query($do_bazy,$dodaj);
                        if(!$do_bazy == true){
                            echo "Nowy klient nie zostal dodany do bazy danych";
                        }else{
                            echo "Klient ".$usernick." został dodany do bazy";
                        }
                        mysqli_close($do_bazy);

                    ?>
                    <div class="przyciskZaloguj">
                        <input type="submit" value="Dołącz już teraz!"/> 
                    </div> 
                </div>
            </div>
        </form> 
    </div>

    <div class="footer">
        <p>Zarejestruj się i zacznij przygodę już teraz! &copy;</p>
    </div>        
              
      
      
  </body>  
    
</html>