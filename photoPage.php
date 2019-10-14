<!DOCTYPE html>
<html>
	<head>
        <!--Bevat functions.php voor de lay-out, zorgt dat alle functies van functions.php hier gebruikt kan worden-->
        <?php require_once "functions.php" ?>
        <?php require_once "photo.functions.php" ?>
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
					<?php photo() ?>
				</div>
			</div>
                <!--Importeren van de Footer-->

                <?php footer() ?>
		</div>
	</body>
</html>