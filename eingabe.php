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
  <title> Flow Side Festival | Eingabe Inserat </title>
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
                        <img src="bilder/bilder_slider/bild_slider_01.jpg" alt="bild Slider1">
                    </figure>
                    <figure>
                        <img src="bilder/bilder_slider/bild_slider_02.jpg" alt="bild Slider2">
                    </figure>
                    <figure>
                        <img src="bilder/bilder_slider/bild_slider_03.jpg" alt="bild Slider3">
                    </figure>
                    <figure>
                        <img src="bilder/bilder_slider/bild_slider_04.jpg" alt="bild Slider4">
                    </figure>
                    <figure>
                        <img src="bilder/bilder_slider/bild_slider_02.jpg" alt="bild Slider5">
                    </figure>
                </figure>
            </div>
          </div>
          <!-- ######## Ende Slider ######## -->
  </div>
  <main>
    <div id="main_inhalt_infos">
      <section class="infos">
      <!-- Inserat eintragen -->
        <h1>// Inserat eintragen</h1></br></br>
        <p>Füllen Sie bitte alle Felder vollständig aus und klicken sie dann auf „Inserat absenden“.
          Ihr Eintrag wird dann umgehend
          freigeschaltet und es steht nichts mehr im „WEGE“.</p>
        <form class="cf" action="auswertung_drive2gether.php" method="post">
          <div class="half left cf">
              <input  class="radio" type="checkbox" name="geschlecht" id="weiblich" value="weiblich">
              <span class="check">weiblich</span>
              <input  class="radio" type="checkbox" name="geschlecht" id="maenlich" value="maenlich">
              <span class="check">männlich</span>
              <input type="text" id="input-name" placeholder="Vorname" name="vorname">
              <input type="text" id="input-name" placeholder="Nachname" name="nachname">
              <input type="email" id="input-email" placeholder="Email" name="email">

          </div>
              <div class="half right cf">
                <p class="inserat_beschreibung">Beschreibe Kurz deine Mitfahrgelegenheit, wann du fährst, was du dafür haben und z.B was für ein Auto du fährst.</p>
                <textarea name="inhalt" type="text" id="input-message" placeholder="Text des Inserates"></textarea>
                <input type="text" id="preis" placeholder="dein Preis" name="preis">

              </div>

                <input type="submit" value="Inserat absenden" id="input-submit">
          </form>



      </section>

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
