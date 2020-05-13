<?php 

include 'class voiture.php';
?>


<?php

$voiture1 = new Voiture("BE-2FCD45 ", 150000 ," A3 "," Audi "," noire ",1);


echo $voiture1->immatriculation;
echo $voiture1->kilometrage. " kilometre ";
echo $voiture1->marque;
echo $voiture1->modele;
echo $voiture1->couleur;
echo $voiture1->poids." Tonne";




?>