<?php       
    function photo() {
        $imgarray = array();
        $path = "photos";                                    //Path naar img
        $file = scandir($path);                                 //scant directory zet alle files in een array
        if ($file) {

            foreach ($file as $key => $img) {                       //Deze foreach vangt . en .. af krijgt unix timestamps van de files
                $extensioncheck = pathinfo($img);                   //Checked file extension van de img

                if ($extensioncheck['extension'] == "gif" || $extensioncheck['extension'] == "png" || $extensioncheck['extension'] == "jpg" || $extensioncheck['extension'] == "jpeg") {

                    $time = filectime($path."\\" . $img);        //Filectime krijgt de unix timestamp terug van het moment dat de file wordt OPGESLAGEN
                    $imgarray[$img] = array($time);                 //Files worden in een nieuwe array gezet de key van elk object is de bestandsnaam de value de unix timestamp               
                } else {
                    
                }
            }
            arsort($imgarray);                                      //Sorteert op timestamp zodat nieuwste boven komt

            foreach ($imgarray as $key => $value) {
                list($width, $height) = getimagesize( $path . "\\" . $key );        //Kijkt wat de hoogte en breedte van de foto is
                if ($height <= $width)
                {
                    $className = "horizantalImg";                   //Als het een brede of vierkante foto is krijgt hij de class horizantalImg
                }
                else
                {
                    $className = "verticalImg";                     //Anders krijgt hij de class verticalImg
                }
                print("<img class=".$className." src=" . $path . "\\" . $key . ">");     //print de key (img file) als <img>
            }
        }
    }
?>