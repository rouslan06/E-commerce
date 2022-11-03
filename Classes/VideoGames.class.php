<?php

    require __DIR__."./Product.class.php";

    class VideoGame extends Product () {

        private string $type;
        private int $ageMinimum;
        private int $moyenneCritique;

        public function __construct($nom, $categorie, $prixHT, $tva, $image, $type, $ageMinimum, $moyenneCritique) {
            parent::__construct($nom, $categorie, $prixHT, 20, $image);
            $this->type = $type;
            $this->ageMinimum = $ageMinimum;
            $this->moyenneCritique = $moyenneCritique;
        }
        //----------------------------------------------------
        public function getType() {
            return $this->type;
        }

        public function setType($type) {
            if ($type != '') {
                $this->type = $type;
            }
        }
        //----------------------------------------------------
        public function setAgeMinimum($age) {
            if ($age < $ageMinimum) {
                $this->ageMinimum = $ageMinimum;
            }
        }
        //----------------------------------------------------
        public function getMoyenneCritique() {
            return $this->moyenneCritique;
        }
        
        public function setMoyenneCritique($moyenneCritique) {
            if ($moyenneCritique >= 0) {
                $this->moyennecritique = $moyenneCritique;
            }
        }
        //----------------------------------------------------
        public Affichage() {
            echo "<p>" . $this->type . "</p>";
            echo "<p>" . $this->ageMinimum . "</p>";
            echo "<p>" . $this->moyenneCritique . "</p>";
        }

        public afficherToutesLesInformations() {

            parent::afficherToutesLesInformations();

            echo "<p>" . $this->type . "</p>";
            echo "<p>" . $this->ageMinimum . "</p>";
            echo "<p>" . $this->moyenneCritique . "</p>";
        
        }

    }

?>