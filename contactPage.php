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
                            <form method="POST">
                                <input type="text" name="firstName" placeholder="Uw voornaam">
                                <input type="text" name="lastName" placeholder="Uw achternaam">
                        </div>
                        <div id="contactGridCell2">
                            <img src="img/email_Icon.png" alt="Icoon van een brief">
                            <input type="text" name="email" class="email" placeholder="Uw emailadres">
                        </div>
                        <div id="contactGridCell3">
                            <img src="img/phone2_Icon.png" alt="Icoon van een telefoon">
                            <input type="text" name="tel" class="tel" placeholder="Uw telefoonnummer">
                        </div>
                        <div id="contactGridCell4">
                            <img src="img/message_Icon.png" alt="Icoon van een bericht">
                            <textarea name="message" placeholder="Bericht" class="textarea"></textarea>
                            <input type="submit" name="submit" class="verzendKnop">
                            </form>
                        </div>
                    </div>
                </div>
                <!--Importeren van de Footer-->
                <?php footer() ?>
            </div>
            <?php
            $request = $_SERVER["REQUEST_METHOD"];

            if ($request == "POST") {

                $fName = $_POST["firstName"];
                $lName = $_POST["lastName"];
                $Mail = $_POST["email"];
                $Tel = $_POST["tel"];
                $Message = $_POST["message"];
                $submit = $_POST["submit"];

                function waarSchuwing()
                {

                    echo '<script type="text/javascript">alert("U vergeet wat in te vullen");</script>';

                }

                if (!empty($fName) && !empty($lName) && !empty($Mail) && !empty($Tel) && !empty($Message)) {
                    $to = "test@test.nl";
                    $subject = "Contact";
                    $message =  "Beste Mr/Mevr, \n \r\n" .
                                $Message . "\r\n \r\n" .
                                "Mijn gegevens zijn: \r\n Mail: $Mail \r\n Tel: $Tel \r\n \r\n" .
                                "Met vriendelijke groet, \r\n $fName $lName";
                    $headers =  "From: $Mail" . "\r\n" .
                                "Reply-To: $Mail" . "\r\n" .
                                "X-Mailer: PHP/" . phpversion();

                    if ($request == "POST" && isset($submit)) {
                        mail($to, $subject, $message, $headers);
                    }
                } else {
                    waarSchuwing();
                }
            }
            ?>
        </div>
    </body>
</html>