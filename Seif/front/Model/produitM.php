<?php
class produit {
    private $id;
    private $nom;
    private $marque;
    private $poids;
    private $couleur;
    private $prix;

    public function __construct($nom, $marque, $poids, $couleur, $prix) {
        $this->nom=$nom;
        $this->marque=$marque;
        $this->poids=$poids;
        $this->couleur=$couleur;
        $this->prix=$prix;
    }

    public function getId() {
        return $this->id;
    }

    public function setNom($nom) {
        $this->nom=$nom;
    }
    public function getNom() {
        return $this->nom;   
    }

    public function setMarque($marque) {
        $this->marque=$marque;
    }
    public function getMarque() {
        return $this->marque;
    }
    public function setPoids($poids) {
        $this->poids=$poids;
    }
    public function getPoids() {
        return $this->poids;
    }
    public function setCouleur($couleur) {
        $this->couleur=$couleur;
    }
    public function getCouleur() {
        return $this->couleur;
    }
    public function setPrix($prix) {
        $this->prix=$prix;
    }
    public function getPrix() {
        return $this->prix;
    }
}
?>