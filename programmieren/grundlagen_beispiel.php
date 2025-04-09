<?php

class Testklasse{
    public function bedingung($zahl){
        if($zahl == 10){
            echo "Die Zahl " . $zahl . " ist genau gleich 10<br>";
        }
        elseif($zahl > 10){
            echo "Die Zahl " . $zahl . " ist größer als 10<br>";
        }
        else{
            echo "Die Zahl " . $zahl . " ist nicht größer als 10<br>";
        }
    }

    public function schleife($zahl){
        echo "Schleife von 1 bis " . $zahl . "<br>";
        for($i = 1; $i < $zahl; $i++){ 
            echo $i . "<br>";
        }
    }

    public function kopfschleife($zahl){
        echo "Kopfgesteuerte Schleife von 1 bis " . $zahl . "<br>";
        
        $i = 1;

        while($i <= $zahl){
            echo $i . "<br>";
            $i++;
        }
    }

    public function fussschleife($zahl){
        echo "Kopfgesteuerte Schleife von 1 bis " . $zahl . "<br>";

        $i = 1;

        do{
            echo $i . "<br>";
            $i++;
        }
        while($i <= $zahl);
    }
}

function meine_zahl($zahl){
    echo "Meine Zahl ist: " . $zahl . "<br>";
}

function mein_text($text){
    echo "Mein Text ist: " . $text . "<br>";
}

$test = new Testklasse();

$test->bedingung(9);
$test->schleife(7);
$test->kopfschleife(5);
$test->fussschleife(3);

meine_zahl(42);
mein_text("Mein Text");

?>