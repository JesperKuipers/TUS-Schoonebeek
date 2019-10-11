<!DOCTYPE html>
<html>
	<head>
        <!--Bevat functions.php voor de lay-out, zorgt dat alle functies van functions.php hier gebruikt kan worden-->
        <?php require_once "functions.php" ?>
        <!--Importeer de basis informatie-->
        <?php imports() ?>
	</head>
	<body>
        <!--Importeren van de header-->
        <?php headerBar() ?>
		<div id="contentAndRssContainer">
            <!--Importeren van de Navigatie balk (aan de functie wordt de huidige bestand naam mee gegeven-->
            <?php navBar(basename($_SERVER['PHP_SELF'])) ?>
			<div id="rssFeed">
				
			</div>
			<div id="contentContainer">
				<div class="imgOrTextContainer">
					<h1>Studeren aan technische universiteit Schoonebeek</h1> 
					<p>
						Kies jij ervoor om te studeren op Technische Universiteit Schoonebeek? 
						Dan begin je aan de tijd van je leven! Op deze universiteit krijg je de kans om jouw talenten te ontdekken en ontwikkelen. 
						Op hetzelfde moment krijg je de kans om vol van het studentenleven genieten.  
					</p>
					<p><a href="https://duo.nl/particulier/studiefinanciering/index.jsp " class="button" target="_blank">Klik hier voor meer informatie.</a>
						Studeren kost vaak veel geld en omdat veel van onze studenten van over de hele wereld komen 
						(Europa, Azië en zelfs uit Zuid-Amerika), zijn onze opleidingen betaalbaar en worden veel kosten vergoed door DUO.
					</p>
				</div>
				<div class="imgOrTextContainer">
					<h1>Oorsprong </h1> 
					<p>
						De Technische Universiteit te Schoonebeek heeft zijn ontstaan te danken aan zwerver Floris. 
						Onder de inwoners van Schoonebeek is zwerver Floris erg bekend, 
						niet alleen omdat hij onze Technische Universiteit Schoonebeek heeft gesticht, maar ook om zijn karakter en persoonlijkheid. 
						Zwerver Floris is jarenlang afhankelijk geweest van zijn dorpsgenoten en heeft de hulp van zijn naasten vervolgens 
						terugbetaald door met het idee van een TU te komen. Nadat hij op dit idee was gekomen heeft hij het uitgewerkt en op gang gebracht. Zo is de Technische Universiteit te Schoonebeek ontstaan.
					</p>
				</div>
                <!--Importeren van de Footer-->
                <?php footer() ?>
			</div>
		</div>
	</body>
</html>