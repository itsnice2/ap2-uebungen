<?php 

echo "Bubble-Sort in PHP<br><br>";

$zahlen = [1, 10, 100, 3, 5, 27, 18, 42, 23, 99, 2, 7];

echo "<hr><br>Unsortiert:<br>";
$x = 1;
foreach( $zahlen as $z){
    echo $x . ": " . $z . "<br>";
    $x++;
}

function bubbleSort(array $werte): array{
    $laenge = count($werte);

    for( $i = 0; $i < $laenge - 1; $i++ ){

        for( $j = 0; $j < $laenge - $i - 1; $j++ ){
            
            if( $werte[$j] > $werte[$j + 1] ){

                $tausch         = $werte[$j];
                $werte[$j]      = $werte[$j + 1];
                $werte[$j + 1]  = $tausch;
            }
        }
    }
    
    return $werte;
}

echo "<br><hr><br>Sortiert:<br>";

$sortiert = bubbleSort($zahlen);

$x = 1;
foreach( $sortiert as $w ){
    echo $x . ": " . $w . "<br>";
    $x++;
}

?>

<h1>Der volle Code dieser Seite:</h1>
<pre>
<?php
    echo htmlentities(file_get_contents("bubble-sort-php.txt"));
?>
</pre>