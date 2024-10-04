<?php

    $aciertos = 0;
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];

    echo "<h3>1. ¿En que año fue lanzado el primer juego de FNAF? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = 2014";
    if($pregunta1 == "2014"){
        $aciertos++;
        echo "<img src='Imagenes/cheque.png' width='50px'><hr>";
    } else {
        echo "<img src=Imagenes/soul.png' width='50px'><hr>";
    }

    echo "<h3>3. Mañana es __________</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta3." ---- Correcta = otro día</h5>";
    if(strtoupper($pregunta3) == "otro día"){
        $aciertos++;
        echo "<img src='Imagenees/cheque.png' width='50px'><hr>";
    } else {
        echo "<img src='Imagenes/soul.png' width='50px'><hr>";
    }

    echo "<h3>2. Quienes fueron los creadores de Fredbear's Family Dinner?</h3>";
    echo "<h5>Repuesta seleccionada ".implode(",", $pregunta2)." ---- Correcta = William Afton, Henry Emily</h5>";
    $p3_respuestas_correctas = 0;

    if(count($pregunta3) == 2){
        for($i=0; $i<count($pregunta3); $i++){
            if($pregunta2[$i] == "henry emily" || $pregunta2[$i] == "william afton"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
            echo "<><hr>";
        } else {
            echo "<><hr>";
        }
    } else {
        echo "<";
    }
        echo "<h3>4. ¿Por que los animatronicos de fnaf 1 nos quieren meter a un traje?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = porqie pueden pensar que somos un endoesqueleto</h5>";
        if($pregunta4 == "porque pueden pensar que somos un endoesqueleto"){
            $aciertos++;
            echo "<>";
        } else {
            echo "<><hr>";
        }

        echo "<h3>5. Que son los nightmare en fnaf 4?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = son maniquies alterados por gas</h5>";
        if($pregunta4 == "son maniquies alterados por gas"){
            $aciertos++;
            echo "<><hr>";
        } else {
            echo "<><hr>";
        }

        echo "<h3>4. RWQFSFASXC _________ NAME!</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = SAY MY</h5>";
    if(strtoupper($pregunta6) == "SAY MY"){
        $aciertos++;
        echo "<>";
    } else {
        echo "<>";
    }
    echo "<h3>2. Quienes fueron los creadores de Fredbear's Family Dinner?</h3>";
    echo "<h5>Repuesta seleccionada ".implode(",", $pregunta3)." ---- Correcta = William Afton, Henry Emily</h5>";
    $p3_respuestas_correctas = 0;

    if(count($pregunta7) == 2){
        for($i=0; $i<count($pregunta7); $i++){
            if($pregunta7[$i] == "toy" || $pregunta7[$i] == "old/withered"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
            echo "<>";
        } else {
            echo "<><hr>";
        }
    }
    echo "<h3>8. Que phanpoms te arruinan la ventilación en fnaf3?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta8." ---- Correcta = phanton freddy, phantom mangle, phantom chica, phantom foxy, phantom bb";
        if($pregunta4 == "phanton freddy, phantom mangle, phantom chica, phantom foxy, phantom bb</h5>"){
            $aciertos++;
            echo "<><hr>";
        } else {
            echo "<><hr>";
        }
        echo "<h3>9. Quien nos habla al comienzo de las noches de FNAF SL?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta9." ---- Correcta = handunit";
        if($pregunta4 == "handunit</h5>"){
            $aciertos++;
            echo "<><hr>";
        } else {
            echo "<><hr>";
        }
        echo "<h3>10. Quienes son los Salvaged de FNAF6?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta10." ---- Correcta = molten freddy, scraptrap, scrapbaby, lefty";
        if($pregunta4 == "molten freddy, scraptrap, scrapbaby, lefty</h5>"){
            $aciertos++;
            echo "<><hr>";
        } else {
            echo "<><hr>";
        }
    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>