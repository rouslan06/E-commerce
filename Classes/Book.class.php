<?php

    require __DIR__."./Product.class.php";

    class Book extends Product {

        private string $auteur;
        private string $format;

        public function __construct($nom, $categorie, $prixHT, $tva, $image, $titre, $format) {
            parent::__construct($nom, $categorie, $prixHT, $tva, $image);
            $this->auteur = $auteur;
            $this->format = $format
        }

        public function getAuteur() {
            return $this->auteur;
        }

        public function setAuteur($auteur) {
            if ($auteur != '') {
                $this->auteur = $auteur;
            }
        }

        // On récupère l'attribut format depuis un getter car la propriété est en privé
        public function getFormat() {
            return $this->format;
        }

        // On met à jour l'attribut format depuis un setter car la propriété est en privé 
        public function setFormat($format) {
            if ($format != "") {
            $this->format = $format;
            }
        }
        
        public Affichage() {
            echo "<p>" . $this->auteur . "</p>";
            echo "<p>" . $this->format . "</p>";
            echo "<p>" . $this->description . "</p>";
        }

        public afficherToutesLesInformations() {

            parent::afficherToutesLesInformations();

            echo "<p>" . $this->auteur . "</p>";
            echo "<p>" . $this->format . "</p>";
        
        }

    }

?>