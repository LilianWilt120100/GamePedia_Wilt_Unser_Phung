1.

<?php
$time_start = microtime(true);
 
// Attend pendant un moment
usleep(100);
 
$time_end = microtime(true);
$time = $time_end - $time_start;
 
echo "Ne rien faire pendant $time secondes\n";
?>


2.
L'index sur une colonne d'une table permet d'agir comme un pointeur sur cette dernière
et par consequent de récupérer tout les valeurs de cette colonne, et surtout celle des 
conditions de clause



3.



4.
Le problème avec les N+1 query est le risque de recevoir une valeur en trop que 
l'on a déjà reçu car il y a n+1 requête et que l'on soit obligé de revoyé la même
requête.