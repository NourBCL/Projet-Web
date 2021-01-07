<?php
    require_once '../Conf.php';

    class cartC{
        public function addCart($id_product, $name, $price, $descr) {
            $sql='INSERT INTO carts(id_product, name, price, descr) values(:id_product, :name, :price, :descr)';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'id_product' => $id_product,
                'name' => $name,
                'price' => $price,
                'descr' => $descr
            ]);
        }

        public function retrieveProduct($id) {
            $sql='select * from products where id=:id_product'; // Select * (all) el utilisateur el id mte3ou 1
            $db=config::getConnexion(); // madhebik t3awedhom nafshom
            $query=$db->prepare($sql); // madhebik t3awedhom nafshom
            $query->execute(['id_product' => $id]); // madhebik t3awedhom nafshom
            return $query->fetch(PDO::FETCH_ASSOC); // madhebik t3awedhom nafshom
        }

        public function retrieveAllProducts() {
            $sql='select * from carts'; // Select * (all) el utilisateur el id mte3ou 1
            $db=config::getConnexion(); //amalna el connection bin Code ou Base de donnee
            $list=$db->query($sql);
            return $list;
        }

        public function deleteCart($id) {
            $sql='delete from carts where id_product=:id_product';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute(['id_product' => $id]);
        }

        public function countPrice() {
            $sql='SELECT SUM(price*quantity) AS count FROM carts';
            $db=config::getConnexion(); 
            $query=$db->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        public function updateQuantity($quantity, $id_product) {
            $sql='UPDATE carts SET 
                quantity = :quantity
                WHERE id_product = :id_product';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'quantity' => $quantity,
                'id_product' => $id_product
            ]);
        }
    }

?>