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
				<div class="imgOrTextContainer">
					<div id="contactGrid">
						<div id="contactGridCell1">
							<img src="img/person_Icon.png" alt="Icoon van een persoon">
							<input type="text" name="firstName" placeholder="Uw voornaam">
							<input type="text" name="lastName" placeholder="Uw achternaam">
						</div>
						<div id="contactGridCell2">
							<img src="img/email_Icon.png" alt="Icoon van een brief">
						</div>
						<div id="contactGridCell3">
							<img src="img/phone2_Icon.png" alt="Icoon van een telefoon">
						</div>
						<div id="contactGridCell4">
							<img src="img/message_Icon.png" alt="Icoon van een bericht">
							<textarea name="message" placeholder="Bericht"></textarea>
						</div>
					</div>
				</div>
                <!--Importeren van de Footer-->
                <?php footer() ?>
			</div>
		</div>
	</body>
</html>