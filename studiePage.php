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
			<div id="contentContainerFullWidth">
				<div id="studiePageGrid">
					<div id="gridCell1">
						<h3>Werktuigbouwkunde</h3>
					</div>
					<div id="gridCell2">
						<h3>Informatica</h3>
					</div>
					<div id="gridCell3">
						<div class="imgOrTextContainer">
							<h1>High tech system</h1>
						</div>
						<div class="imgOrTextContainer">
							<h1>Composite design</h1>
						</div>
						<div class="imgOrTextContainer">
							<h1>Sustainable polymers</h1>
						</div>
					</div>
					<div id="gridCell4">
						<div class="imgOrTextContainer">
							<h1>Front end development</h1>
						</div>
						<div class="imgOrTextContainer">
							<h1>Cloud</h1>
						</div>
						<div class="imgOrTextContainer">
							<h1>Technical IT</h1>
						</div>
						<div class="imgOrTextContainer">
							<h1>Software development</h1>
						</div>
					</div>
				</div>
				<div class="imgOrTextContainer">
					<h1>Informatica</h1>
				</div>
				<div class="imgOrTextContainer">
					<h1>Front end developer</h1>
					<p>
						Als front-end ontwikkelaar ben je verantwoordelijk voor de technische voorkant van een website, applicatie of programma. Jij zorgt ervoor dat het programma er niet
						alleen goed uit ziet, maar ook echt  werkt.  Je houdt je bezig met het ontwerpen, programmeren, testen  en implementeren van het front-end gedeelte van een toepassing. 
						Zowel op het gebied van de technische aspecten als op het gebied  van gebruiksmogelijkheid en toegankelijkheid.
					</p>
				</div>
				<div class="imgOrTextContainer">
					<h1>Cloud</h1>
					<p>
						Cloud computing is simpel gezegd het verhuizen van software en documenten van een computer naar het internet. Cloud computing is in de laatste jaren sterk gegroeid. 
						Tegenwoordig zijn er dan ook steeds meer applicaties die alleen nog via het internet te bereiken zijn en niet gedownload kunnen worden.
					</p>
				</div>
				<div class="imgOrTextContainer">
					<h1>Technical IT</h1>
					<p>
						Als technisch informaticus ben je de uitvinder van moderne technische IT-systemen. 
						Door jouw gecombineerde kennis van soft- en hardware ben je in staat om moderne, slimme, 
						duurzame en veilige oplossingen te maken voor de steeds complexere uitdagingen van de toekomst. 
						In het dagelijks leven zijn we steeds afhankelijker geworden van geautomatiseerde systemen.  
					</p>
				</div>
				<div class="imgOrTextContainer">
					<h1>Software development</h1>
					<p>
						Software ontwikkelen voor eindgebruikers in een professionele programmeertaal, het integreren van de cloud binnen de IT-werkzaamheden van je organisatie. 
						Als software developer moet je slimme oplossingen kunnen verzinnen voor soms lastige vraagstukken. 
						Ook moet je de drive hebben om je kennis up-to-date te houden.   
					</p>
				</div>
				<div class="imgOrTextContainer">
					<h1>Werktuigbouwkunde</h1>
				</div>
				<div class="imgOrTextContainer">
					<h1>High Tech System</h1>
					<p>
						Binnen de opleiding High Tech Systems werk je met multidisciplinaire teams samen met bedrijven aan praktijkgericht onderzoek. 
						In fysieke laboratoria met ultra moderne apparatuur. 
						Aan deze opleiding zitten daarom redelijk hoge kosten. 
					</p>
				</div>
				<div class="imgOrTextContainer">
					<h1>Composite design</h1>
					<p>
						Als student van de composite design opleiding ga je bezig met technische elementen van hoge kwaliteit. 
						De kerncompetentie van een samengesteld ontwerp ligt vooral in de hechting van verschillende high-tech materialen. 
					</p>
				</div>
				<div class="imgOrTextContainer">
					<h1>Sustainable polymers</h1>
					<p>
						Biologisch afbreekbare verpakkingen en frisdrankflessen gemaakt uit planten is realiteit geworden. 
						Wil jij nieuwe biopolymeren ontwikkelen, duurzame prototypes 3D-printen of onderzoek doen naar de recyling van kunststofproducten? 
						Dan is deze opleiding zeker iets voor jou!
					</p>
				</div>
                <!--Importeren van de Footer-->
                <?php footer() ?>
			</div>
		</div>
	</body>
</html>