
<!-- Her inkluderer vi header vha. PHP -->
<?php
include 'include/header.php';
?>




<!-- Her oprettes carousellen. Den er sat til at skifte billede hver 5. sekund v.h.a. data-interval="5000" -->
<!-- Derudover bliver prikkerne til at indikere opettet - samt data-target der indeholder Javascript som pointer til det element der skal skifte i carousellen  -->

<div id="custom-bootstrap-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
        <li data-target="#custom-bootstrap-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#custom-bootstrap-carousel" data-slide-to="1"></li>
        <li data-target="#custom-bootstrap-carousel" data-slide-to="2"></li>
        <li data-target="#custom-bootstrap-carousel" data-slide-to="3"></li>
    </ol>

    <!-- Her bliver wrapper oprettet som indeholder indholdet i carousellen - billeder og tekst-->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/forside1.jpg" alt="Vi leger med mad">
            <!-- Tekst på billedet -->
            <div class="carousel-caption"><hr class="linje">Vi leger med mad, er et hyggeligt <br> event, hvor madglade unge mødes  <br> og laver mad, og spiser sammen.<br><span class="laesmere"><a href="events.php"> Læs mere</a></span></div>
            
        </div>
        <div class="item">
            <img src="img/forside2.jpg" alt="Madlavning uden alder">
            <div class="carousel-caption"><hr class="linje">Madlavning uden alder, handler om<br> at bringe den unge og ældre generation sammen<br>om fælles madlavning - og spisning<br><span class="laesmere"><a href="events.php"> Læs mere</a></span></div>
        </div>
        <div class="item">
            <img src="img/forside4.jpg"alt="Madmekka">
            <div class="carousel-caption"><hr class="linje">Madmekka handler om at bringe<br> unge i Danmark og unge flygtninge<br> tættere sammmen gennem mad og fællesskab.<br><span class="laesmere"><a href="events.php"> Læs mere</a></span></div>
        </div>

          <div class="item">
            <img src="img/forside3.jpg" alt="Kollegie pop-up">
            <div class="carousel-caption"><hr class="linje">Bor du på kollegium i Aarhus,<br> og synes du, at det kan være svært at<br> samle gangen til fælles madlavning og spisning?<br><span class="laesmere"><a href="events.php"> Læs mere</a></span></div>
        </div>
        <!-- Pilene på carousellen -->
    </div><a class="left carousel-control" href="#custom-bootstrap-carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control"
    href="#custom-bootstrap-carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>

</div>




<?php
include 'include/footer.php';
?>



<!-- Kommenteret -->