<?php
    require_once '../config.php';
    require_once '../Model/nutritionistsM.php';

    class nutritionistC{
        public function retrieveAllnutritionists() {
            $sql='select * from nutritionists'; // Select * (all) el utilisateur el id mte3ou 1
            $db=config::getConnexion(); //amalna el connection bin Code ou Base de donnee
            $list=$db->query($sql);
            return $list;
        }

        public function retrievenutritionists($id) {
            $sql='select * from nutritionists where id=:id'; // Select * (all) el utilisateur el id mte3ou 1
            $db=config::getConnexion(); // madhebik t3awedhom nafshom
            $query=$db->prepare($sql); // madhebik t3awedhom nafshom
            $query->execute(['id' => $id]); // madhebik t3awedhom nafshom
            return $query->fetch(PDO::FETCH_ASSOC); // madhebik t3awedhom nafshom
        }

        public function addnutritionists($nutritionist) {
            $sql='INSERT INTO nutritionists(nom, prenom, age, adresse_cab, imgUrl) values(:nom, :prenom, :age, :adresse_cab, :imgUrl)';
            $db=config::getConnexion();
            $query=$db->prepare($sql); 
            $query->execute([
                'nom' => $nutritionist->getNom(),
                'prenom' => $nutritionist->getPrenom(),
                'age' => $nutritionist->getAge(),
                'adresse_cab' => $nutritionist->getAdresse_cab(),
                'imgUrl' => $nutritionist->getImg_url()          
            ]);
        }

        public function deletenutritionists($id) {
            $sql='delete from nutritionists where id=:id';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute(['id' => $id]);
        }

        public function updatenutritionists($nutritionist, $id) {
            $sql='UPDATE nutritionists SET 
                nom = :nom, 
                prenom = :prenom,
                age = :age,
                adresse_cab = :adresse_cab  ,
                imgUrl= :imgUrl             
                WHERE id = :id';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'nom' => $nutritionist->getNom(),
                'prenom' => $nutritionist->getPrenom(),
                'age' => $nutritionist->getAge(),
                'adresse_cab' => $nutritionist->getAdresse_cab(),
                'imgUrl' => $nutritionist->getImg_url(),
                'id' => $id
            ]);
        }
    }

?>