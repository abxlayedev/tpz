<?php

include "calculs.php";

$calculatrice = new calculateur;

echo "Addition <br/>";
echo $calculatrice->additionner(10, 20)."<br/>";
echo "Soustraction <br/>";
echo $calculatrice->soustraction(10, 20)."<br/>";
echo "multiplier <br/>";
echo $calculatrice->multiplier(10, 20)."<br/>";
echo "modulo <br/>";
echo $calculatrice->calculmodulo(10, 20)."<br/>";
echo "diviser <br/>";
echo $calculatrice->diviser(10, 20)."<br/>";

?>