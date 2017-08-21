
<?php
include 'include/header.php';
?>

<!-- Her har vi som alternativ løsning, stylet på navigationen - således menupunkterne har en anden farve end forsiden, som den er stylet ud fra -->
<style  type="text/css">
    #custom-bootstrap-menu.navbar-default .navbar-nav>li>a{color: black;}
</style>


    <main>
      <div class="fuld">
		  <!-- Pil der popper op når man scroller ned på sitet - understøttet af JS -->
         <a href="#" class="scrollToTop"> Scroll til toppen </a>   
        <div class="container">
         <!-- Dette site er også bygget op med bootstrap grid -->
          <article class="row">
			<section class="col-lg-12">
				<h2>Events</h2>
				<p class="eventtekst">
				Food Maker stræber hele tiden efter, at skabe rammerne<br> for nogle hyggelige og lærerige events.<br> Vi har mange forskellige events, hvor der helt sikkert er et for dig. <br> Du kan læse meget mere om hvilke events vi kan tilbyde dig - nedenunder.<br> Nederst på siden kan du tilmelde dig.
				</p>
			</section>
		</article>
		<article class="row">
			<section class="col-lg-6">
				<h3 class="scrolltest">Vi leger med mad</h3>
				<p>
				Vi leger med mad er et madkoncept, der er udviklet af unge for unge, hvor du hver tirsdag har muligheden for at komme og opleve glæden ved at lave mad sammen med andre madglade unge. Samtidig kan du få nye madlavningsevner og inspiration til nye retter.
 
Temaerne har været alt fra bøf med bearnaise til wraps, græskarsuppe, farverige pizzaer og meget andet. På vores facebook side kan du følge med i hvad næste tirsdags tema bliver og tilmelde dig til begivenheden.
				</p>
				<!-- Knap der går igen under hvert event, også understøttet af JS-->
				<button class="scrollto" id="vlmm"> Tilmeld </button>
			</section>
			<section class="col-lg-6">
				<img class="eventimg" src="img/event1.jpg" alt="Vi leger med mad">
				
			</section>	
		</article>
    <hr>
		<article class="row">
			<section class="col-lg-6">
				<img class="eventimg" src="img/event2.jpg" alt="Madlavning uden alder">
			</section>
			<section class="col-lg-6 align">
				<h3>Madlavning uden alder</h3>
				<p>
				Går du derhjemme og er ensom, og har brug for at møde nye folk at kende?<br> Madlavning uden alder handler om at bringe unge og ældre mennesker sammen om noget fælles, nemlig madlavning. Vi mener der er for lidt kontakt mellem de unge og ældre til dags dato. De unge har fordomme om de ældre og omvendt, og dette vil vi gøre noget ved. Der kræves ingen madlavningskompetencer fra nogle af parterne, og eventet foregår med frie rammer på en uformel måde. Så Kom og vær med når vi hver onsdag kl. 18 kokkererer sammen blandt generationer - og ikke mindst hygger os.
				</p>
				<button class="scrollto" id="mua"> Tilmeld </button>				
			</section>	
		</article>
    <hr>
		<article class="row">
			<section class="col-lg-6">
				<h3>Madmekka</h3>
				<p>
				 DFUNK, <a href="http://dfunk.dk/"> Dansk Flygtningehjælp</a> Ungdom, har lanceret et event under navnet "Madmekka".

Konceptet bag eventen er at bringe unge i Danmark og unge flygtninge tættere sammmen gennem mad og fællesskab. Derfor afholder de hver uge en madcafé i samarbejde med UKH (Ungdomskulturhuset). 
DFUNK har søgt puljen således, at projektet består, og Food Maker støtter derfor op økonomisk omkring dette gode tiltag. Værdierne i Madmekka og tilgangen stemmer fint overens med tilgangen i Food Maker, hvor vi forsøger at skabe styrker, madglæde og fællesskaber mellem unge gennem events og aktiviteter.  
				</p>
				<button class="scrollto" id="mm"> Tilmeld </button>				
			</section>
			<section class="col-lg-6">
				<img class="eventimg" src="img/event3.jpg" alt="Madmekka">
			</section>	
		</article>
    <hr>
		<article class="row">
			<section class="col-lg-6">
				<img class="eventimg" src="img/event4.jpg" alt="Kollegie pop-up">
			</section>
			<section class="col-lg-6">
				<h3>Kollegie pop-up</h3>
				<p>
        Bor du på kollegium i Aarhus, og synes du, at det kan være svært at samle gangen til fælles madlavning og spisning?

Food Maker har løsningen, vi har nemlig et fast initiativ, Kollegie Pop-up, der giver mulighed for, at unge, der bor på kollegium kan få besøg af to unge Food Makers. Det fungerer sådan, at de kommer ud med godt humør og gode råvarer til fælles madlavning og spisning. Det er uden opskrifter, så det er kreativiteten, der skal i gang. Du kan også invitere dine venner over til en sjov og spændende aften<br> Ring og hør nærmere, så vi kan arrangere et kollegie pop-up!
				</p>
				<button class="scrollto" id="kpo"> Tilmeld </button>				
			</section>	
		</article>

<?php
include 'include/tilmeld.php'
?>
	     	
     </div> 					
	</main>


    
<?php
include 'include/footer.php';
?>

<!-- Kommenteret -->