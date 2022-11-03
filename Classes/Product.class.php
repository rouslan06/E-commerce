<?php
    require_once __DIR__."/IProduct.interface.php";

    abstract class Product implements IProduct {

        public int $prixHT;
        public int $TVA = 20;
        public int $prixTTC;
        public string $nom;
        public string $categorie;
        public int $stock;
        //public int $valorisationStock;
        public string $description;
        public string $image;

        public function __construct($nom, $categorie, $prixHT, $TVA, $stock, $image) {

            $this->nom = $nom;
            $this->categorie = $categorie;
            $this->prixHT = $prixHT;
            $this->image = $image;
            $this->stock = $stock;
            //$this->tva = $TVA;

            $this->prixTTC = $this->prixHT + ($this->prixHT * ($this->TVA / 100));
            
        }

        public function valorisation() {
            return $this->stock * $this->prixHT;
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

        public static function clone($product, $nomNew) {

            return new Product(
                $nomNew, 
                $product->categorie,
                $product->prixHT,
                $product->tva,
                $product->stock,
                $product->image,
                ''
            );
        }
    }
?>

