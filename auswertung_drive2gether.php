<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="Festival,Music,Pop,Rock,Heidelberg,Campen,Spaß">
  <meta name="author" content="Davide Scrivano">
  <link rel="stylesheet" href="css/style_main.css">
  <link rel="stylesheet" href="css/mediaquery.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/gallerie.css">
  <title> Flow Side Festival | Infos </title>
</head>
<body>
  <div id="navbar">
    <header>
        <nav>
          <div id="logo">
            <a href="festival.html"><span class="logo1">Flow</span><span class="logo_white">Side</span></a></br>
            <a href="festival.html"><span class="logo2">Festival Heidelberg</span></a>
          </div>
          <menu id="menulinks">
            <li><a href="festival.html">Festival</a></li>
            <li><a href="infos.html">Infos</a></li>
            <li><a href="gallerie.html">Gallerie</a></li>
            <li><a href="tickets.html">Tickets</a></li>
            <li><a href="drive2gether.html">drive2gether</a></li>
          </menu>
        </div>
        </nav>
      </header>
    <div id="slider">
            <div id="captioned-gallery">
                <figure class="slider">
          <!-- ######## Bilder Slider ######## -->
                    <figure>
                        <img src="bilder/bilder_slider/bild_slider_01.jpg" alt="Bilder Slide1">
                    </figure>
                    <figure>
                        <img src="bilder/bilder_slider/bild_slider_02.jpg" alt="Bilder Slide2">
                    </figure>
                    <figure>
                        <img src="bilder/bilder_slider/bild_slider_03.jpg" alt="Bilder Slide3">
                    </figure>
                    <figure>
                        <img src="bilder/bilder_slider/bild_slider_04.jpg" alt="Bilder Slide4">
                    </figure>
                    <figure>
                        <img src="bilder/bilder_slider/bild_slider_02.jpg" alt="Bilder Slide5">
                    </figure>
                </figure>
            </div>
          </div>
          <!-- ######## Ende Slider ######## -->
  </div>
  <main>

    <!-- Beginn der Auswertung -->
    <div class="inhalt_auswertung">
        <h1>// Danke</h1></br></br>

        <p>Danke dass du was für die Umwelt tust und einen Mitfahrer mitnehmen möchtest.</p>
        <p>Dein Inserat wurde soeben hochgeladen und du kannst ihn <span><a href="ausgabe_drive2gether.php">hier einsehen.</a></span> </p>

    <!-- Beginn PHP für Auswertung -->
        <?php


				$vorname = $_POST['vorname'];
				$email = $_POST['email'];
				$nachname = $_POST['nachname'];
				$inhalt = $_POST['inhalt'];
        $geschlecht = $_POST['geschlecht'];
        $preis = $_POST['preis'];



				$db = mysqli_connect("localhost", "drive2gether_user", "passdrive", "drive2gether");

				$eintragen = mysqli_query($db, "INSERT INTO drive2gether_tabelle (vorname, nachname, email, inhalt, geschlecht, preis) VALUES ('$vorname', '$nachname', '$email', '$inhalt', '$geschlecht', '$preis')");
        ?>

        <!-- Ende Php für Auswertung -->
    </div>
  </main>
  <footer>
    <div id="footer_inhalt">
        <div id="footermenu1">
            <span><a href="#">e</a></span>
            <span><a href="#">d</a></span>
            <span><a href="#">c</a></span>
            <span><a href="#">i</a></span>
        </div>
        <div id="footermenu2">
            <span><a href="kontakt.html">Kontakt |</a></span>
            <span><a href="impressum.html">Rechtliches | Impressum</a></span>
        </div>
    </div>
  </footer>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>
</html>
