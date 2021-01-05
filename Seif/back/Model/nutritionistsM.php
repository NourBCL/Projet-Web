<?php
class nutritionist {
    private $id;
    private $nom;
    private $prenom;
    private $age;
    private $adresse_cab;
    private $imgUrl;

    public function __construct($nom, $prenom, $age,$adresse_cab,$imgUrl) {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
        $this->adresse_cab=$adresse_cab;
        $this->imgUrl=$imgUrl;
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

    public function setPrenom($prenom) {
        $this->prenom=$prenom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function setAge($age) {
        $this->age=$age;
    }
    public function getAge() {
        return $this->age;
    }
    public function setAdresse_cab($adresse_cab) {
        $this->adresse_cab=$adresse_cab;
    }
    public function getAdresse_cab() {
        return $this->adresse_cab;
    }
    public function setImg_url($imgUrl) {
        $this->imgUrl=$imgUrl;
    }
    public function getImg_url() {
        return $this->imgUrl;
    }
    
}
?>