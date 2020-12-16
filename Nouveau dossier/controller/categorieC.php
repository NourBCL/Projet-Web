<?PHP
   require_once './config.php';
   require_once './Model/categorie.php';

    class CategoryC {

        function afficherCategory(){

            $sql="SELECT * FROM categorie ";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function choseCategory($category) {
            $sql="SELECT * FROM event ='$category'";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            } 
        }

      
    }