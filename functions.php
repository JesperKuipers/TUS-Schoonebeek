<?php

function imports() {
    ?>
    <title>TU Schoonebeek</title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <?php
}

function headerBar() {
    ?>
    <a id="logo" href="index.php"><div id="header">
            <img id="logoImg" src="img/Logo_Transparant.png" alt="logo TU Schoonebeek">
        <h2>Schoonebeek</h2>
        </div></a>
    <?php
}

function navBar($fileName) {
    //Verander hier de namen
    $page1 = "studiePage.php";
    $page2 = "photoPage.php";
    $page3 = "contactPage.php";
    $page4 = "index.php";
    $name1 = "Opleidingen";
    $name2 = "Foto's";
    $name3 = "Contact";

    //Geeft de juiste navigatie balk aan de juiste pagina mee (reden is blauwe streep (id="usingPage") en de hoofdpagina)
    if($fileName == $page2) {
        ?>
        <div id="navBarWhithoutRss">
			<ul>
				<li><a href="<?php echo $page1 ?>"><?php echo $name1 ?></a></li>
				<li id="usingPage"><a  href="<?php echo $page2 ?>"><?php echo $name2 ?></a></li>
				<li><a href="<?php echo $page3 ?>"><?php echo $name3 ?></a></li>
			</ul>
		</div>
		<?php
    } elseif ($fileName == $page1) {
        ?>
        <div id="navBarWhithoutRss">
            <ul>
                <li id="usingPage"><a href="<?php echo $page1 ?>"><?php echo $name1 ?></a></li>
                <li><a  href="<?php echo $page2 ?>"><?php echo $name2 ?></a></li>
                <li><a href="<?php echo $page3 ?>"><?php echo $name3 ?></a></li>
            </ul>
        </div>
        <?php
    } elseif ($fileName == $page3) {
        ?>
        <div id="navBarWhithoutRss">
            <ul>
                <li><a href="<?php echo $page1 ?>"><?php echo $name1 ?></a></li>
                <li><a  href="<?php echo $page2 ?>"><?php echo $name2 ?></a></li>
                <li id="usingPage"><a href="<?php echo $page3 ?>"><?php echo $name3 ?></a></li>
            </ul>
        </div>
        <?php
    } elseif ($fileName == $page4) {
        ?>
        <div id="navBar">
            <ul>
                <li><a href="<?php echo $page1 ?>"><?php echo $name1 ?></a></li>
                <li><a  href="<?php echo $page2 ?>"><?php echo $name2 ?></a></li>
                <li><a href="<?php echo $page3 ?>"><?php echo $name3 ?></a></li>
            </ul>
        </div>
        <?php
    } else {
        ?>
        <div id="navBarWhithoutRss">
            <ul>
                <li><a href="<?php echo $page1 ?>"><?php echo $name1 ?></a></li>
                <li><a  href="<?php echo $page2 ?>"><?php echo $name2 ?></a></li>
                <li><a href="<?php echo $page3 ?>"><?php echo $name3 ?></a></li>
            </ul>
        </div>
        <?php
    }
}

function footer() {
    ?>
    <div id="footer">
        <!--Laat copyright zien van 2019 tot het huidig jaar-->
        <?php echo "<p>&copy;" . "2019-" . date("Y") . " Technisch universiteit Schoonebeek </p>" ?>
    </div>
    <?php
}
 function test($fileName) {

 }
?>