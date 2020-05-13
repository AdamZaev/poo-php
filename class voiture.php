

<?php
 class Voiture {

   public  $immatriculation;
   public  $kilometrage;
   public  $modele;
   public  $marque;
   public  $couleur; 
   public  $poids;

   public function __construct ($immatriculation,$kilometrage,$modele,$marque,$couleur,$poids) { 
     
    // IMMATRICULATION 
        $this->immatriculation = $immatriculation;

  

    // PAYS DE L'IMMATRICULATION 
        if  (strpos($this->immatriculation, "BE") !== false) {
          print "Belgique " ;
        }  

        if (strpos($this->immatriculation, "DE") !== false) {
          print "Allemagne ";
        } 
        if (strpos($this->immatriculation, "FR") !== false) {
          print "France " ;
        } 
       

      // USAGE DE LA VOITURE
          
        $this->kilometrage = $kilometrage;
        if ( $this->kilometrage < 100000) {
          print "ce véhicule n'a pas beaucoup servi  "; 
        } 
        if ( $this->kilometrage > 100001) {
          print "ce véhicule a un kilométrage moyen  " ;
        } 
        if ( $this->kilometrage > 200001) {
          print "ce véhicule à beaucoup servi ";
        } 
       
      // MODELE

        $this->modele = $modele;


      // (RESERVED/FREE)

        $this->marque = $marque;
        if ( $this->marque =="Audi") {
          print "(reserved) ";
        } else {
          print " (free) ";
        }

        // COULEUR

        $this->couleur = $couleur;

        // POIDS

        $this->poids = $poids;

        // VEHICULE UTTILITAIRE OU COMMERCIAL

        if ( $this->poids > 3.5) {
          print " et c'est un véhicule uttilitaire ";
        } else {
          print " et c'est un Véhicule Commercial ";
        }
        

        

     
 }
}
 
   
 ?>
  


 

