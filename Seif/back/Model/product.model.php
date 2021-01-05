
<?php

require "db.class.php";


class Product {

    public $id;
    public $name;
    public $price;
    public $categorie;
    
    public $image;
    public $db;
    public static $DB;
    function __construct() {
    $this->db = new DB();
    
    }

    private function dispatchImage($fileName){
        $target_dir = "../../images/products/";
        $target_file = $target_dir . $fileName . '.jpg';
        if (file_exists($target_file)) unlink($target_file);
        move_uploaded_file($this->image, $target_file);
    }
    /** This Function will return the newly created product id. */
    function insert(){
        if($this->name && strlen($this->name) > 3 && $this->price > 0 && $this->categorie){
            $query = "INSERT INTO `products`(`name`, `price`,`categorie`) VALUES (:pname,:pprice, :cat);SELECT LAST_INSERT_ID() as id";
            $temparr = array(
                "pname"=> $this->name,
                "pprice"=>$this->price,
                "cat"=>$this->categorie
            );
        $result =  $this->db->insertWLID($query,$temparr);
        $this->dispatchImage($result);
        return $result;
        }
    }

    /** This function will return the deleted product id. */

    public static function delete($id){
        $sql = "delete from products where id = :pid";
        Product::$DB->query($sql, array("pid"=>$id));
        return $id;
    }

    function destroy(){
        return Product::delete($this->id);
    }


    /** this function will return the updated product id; */

    
    function update(){

        if($this->name && strlen($this->name) > 3 && $this->price > 0 && $this->categorie){

        $query = "UPDATE `products` set `name` = :pname, price = :pprice, categorie = :cat where id=:id;";

        $temparr = array(
            "pname"=> $this->name,
            "pprice"=>$this->price,
            "cat"=>$this->categorie,
            "id"=>$this->id
        );


        $this->db->query($query,$temparr);
        $this->dispatchImage($this->id);
        return $this->id;

}

    }



    /** This Function will return an array of Product instances. */
    static function retreive($id = null){
        $rawProducts;
        if ($id == null){
            $rawProducts = Product::$DB->query('SELECT * FROM products');
        } else {
            $rawProducts =  Product::$DB->query('SELECT * FROM products where id=:id', array("id"=>$id));
        }
            $productsInstances =  array();
            $index = 0;
            foreach ($rawProducts as $rawProduct) {
               $_product= new Product();
                $_product->name = $rawProduct["name"];
                $_product->categorie = $rawProduct["categorie"];
                $_product->id = $rawProduct["id"];
                $_product->price = $rawProduct["price"];
                $productsInstances[$index++] = $_product;
            }
            return $productsInstances;
        
    }
    static function retreiveByCategorie($categorie){
        $rawProducts = $db->query('SELECT * FROM products where categorie=:cat', array("cat"=>$id));
        $productsInstances = array();
            $index = 0;
            foreach ($rawProducts as $rawProduct) {
               $_product= new Product();
                $_product->name = $rawProduct["name"];
                $_product->categorie = $rawProduct["categorie"];
                $_product->id = $rawProduct["id"];
                $_product->price = $rawProduct["price"];
                $productsInstances[$index++] = $_product;
            }
            return $productsInstances;
    }

    
}


?>