<?php
    require_once '../config.php';

    class rdvC{
        public function addRdv($id_nut, $id_user, $text, $date) {
            $sql='INSERT INTO rendezvous(id_nut, id_user, text, date) values(:id_nut, :id_user, :text, :date)';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'id_nut' => $id_nut,
                'id_user' => $id_user,
                'text' => $text,
                'date' => $date
            ]);
        }

        public function retrieveUser($id_user) {
            $sql='select * from client where id=:id_user'; // Select * (all) el utilisateur el id mte3ou 1
            $db=config::getConnexion(); // madhebik t3awedhom nafshom
            $query=$db->prepare($sql); // madhebik t3awedhom nafshom
            $query->execute(['id_user' => $id_user]); // madhebik t3awedhom nafshom
            return $query->fetch(PDO::FETCH_ASSOC); // madhebik t3awedhom nafshom
        }

        public function retrieveAllRdv() {
            $sql='select * from rendezvous'; // Select * (all) el utilisateur el id mte3ou 1
            $db=config::getConnexion(); //amalna el connection bin Code ou Base de donnee
            $list=$db->query($sql);
            return $list;
        }

        public function deleteRdv($id_nut) {
            $sql='delete from rendezvous where id_nut=:id_nut';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute(['id_nut' => $id_nut]);
        }



    }

?>