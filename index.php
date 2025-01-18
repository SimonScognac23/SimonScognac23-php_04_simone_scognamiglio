<?php

// Array di numeri a scelta
$numbers = [78, 786, 987, 99, 567, 456, 72, 8, 997, 10];




$sum = 0;  // Con questa variabile teniamo conot della somma
$count = 0; //  Con questa invece il contatore dei numeri pari 



// Ciclo attraverso l'array per sommare solo i numeri pari
foreach ($numbers as $number) {  // per ogni numero dentro l'array...
    if ($number % 2 == 0) { // Controlla se il numero è pari
        $sum = $sum + $number;  // sommo il numero pari e inserisco il suo valore dentro la variabile sum
        $count++;
    }
}



// Calcola la media dei numeri pari
$average = $sum / $count;
echo "La media dei numeri pari è: " . $average . "\n";


?>
