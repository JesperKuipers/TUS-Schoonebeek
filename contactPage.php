<!DOCTYPE html>
<html>
	<head>
		<title>TU Schoonebeek</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/contactPage.css"/>
	</head>
	<body>
		<div id="header">
			<a id="logo" href="index.php">
				<img src="img/Logo_Transparant.png" alt="logo TU Schoonebeek">
			</a>
			<h2> Schoonebeek </h2>
		</div>
		<div id="contentAndRssContainer">
			<div id="navBarWhithoutRss">
				<ul>
					<li><a href="studiePage.php">Opleidingen</a></li>
					<li><a  href="photoPage.php">Foto's</a></li>
					<li id="usingPage"><a href="contactPage.php">Contact</a></li>
				</ul>
			</div>
			<div id="contentContainerFullWidth">
				<div class="imgOrTextContainer">
					<div id="contactGrid">
						<div id="contactGridCell1">
							<img src="img/person_Icon.png" alt="Icoon van een persoon">
							<form>
								<input type="text" name="firstName" placeholder="Uw voornaam">
								<input type="text" name="lastName" placeholder="Uw achternaam">
							</form>
						</div>
						<div id="contactGridCell2">
							<img src="img/email_Icon.png" alt="Icoon van een brief">
							<form>
								<input type="text" name="email" class="email" placeholder="Uw emailadres">
							</form>
						</div>
						<div id="contactGridCell3">
							<img src="img/phone2_Icon.png" alt="Icoon van een telefoon">
							<form>
								<input type="text" name="tel" class="tel" placeholder="Uw telefoonnummer">
							</form>
						</div>
						<div id="contactGridCell4">
							<img src="img/message_Icon.png" alt="Icoon van een bericht">
							<textarea name="message" placeholder="Bericht" class="textarea"></textarea>
							<form action="" method="POST">
								<input type="submit" name="submit" class="verzendKnop">
							</form>
						</div>
					</div>
				</div>
				<div id="footer">
					<p>&copy;2019-2020 Technisch universiteit Schoonebeek </p>
				</div>
			</div>
                        <?php
                            $request = $_SERVER["REQUEST_METHOD"];
                            $fName = htmlentities(isset($_POST["firstName"]));
                            $lName = htmlentities(isset($_POST["lastName"]));
                            $Mail = htmlentities(isset($_POST["email"]));
                            $Tel = htmlentities(isset($_POST["tel"]));
                            $Message = htmlentities(isset($_POST["message"]));
                            $submit = isset($_POST["submit"]);
                            
                            function waarSchuwing(){
                                echo '<script type="text/javascript">alert("U vergeet wat in te vullen");</script>';
                            }
                            
                            if(!empty($fName) || !empty($lName) || !empty($Mail) || !empty($Tel) || !empty($Message)){
                                $to      = 'mailadres';
                                $subject = 'the subject';
                                $message = 'Beste Mr/Mevr,
                                            '. "\r\n \r\n".'
                                            Mijn naam is $fName $lName,
                                            '. "\r\n \r\n".'
                                            $Message
                                            '. "\r\n \r\n".'
                                            Mijn gegevens zijn:
                                            Mail: $Mail
                                            Tel: $Tel
                                            '. "\r\n \r\n".'
                                            Met vriendelijke groet,
                                            $fName $lName';
                                $headers = 'From: webmaster@example.com' . "\r\n" .
                                            'Reply-To: webmaster@example.com' . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();
                            }else{
                                waarSchuwing();
                            }
                            
                            if($request == "POST" && isset($submit)){
                                mail($to, $subject, $message, $headers);
                            }
                            

                        ?>
		</div>
	</body>
</html>