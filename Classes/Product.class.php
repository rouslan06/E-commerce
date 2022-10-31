<?php
    class Product {

        public int $prixHT;
        public int $TVA = 20;
        public int $prixTTC;
        public string $nom = "GTA";
        public string $categorie;
        public int $stock;
        //public int $valorisationStock;
        public string $description;
        public string $image;

        public function __construct($nom, $categorie, $prixHT, $image) {

            $this->nom = $nom;
            $this->categorie = $categorie;
            $this->prixHT = $prixHT;
            $this->image = $image;

            $this->prixTTC = $this->prixHT + ($this->prixHT * ($this->TVA / 100));
            
        }

        public function valorisation($stock, $prixHT) {

            $valorisationStock = $this->stock * $this->prixHT;
        
            return $valorisationStock;
        }

        public function getPriceHT() {
            return $this->prixHT . "€";
        }

        public function getPriceTTC() {
            return $this->prixTTC . "€";
        }

        public function setPriceTC(Float $value) {
            if ($value >= 0) {
                $this->prixHT = number_format($value, 2);
            }
        }

        public function afficherToutesLesInformations() {

            echo "<p>" . $this->getNom() . "</p>";
            echo "<p>" . $this->categorie . "</p>";
            echo "<p>" . $this->getPriceHT() . "</p>";
            echo "<p>" . $this->tva . "</p>";
            echo "<p>" . $this->getPriceTTC() . "</p>";
            echo "<p>" . $this->stock . "</p>";
            echo "<p>" . $this->image . "</p>";

        }
    }
?>

