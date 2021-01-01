<?PHP
   require_once '../config.php';
   require_once '../Model/categorie.php';

    class CategoryC {

        function ajouterCat($category){
			$sql="INSERT INTO categorie (nom , description , image) 
			VALUES (:nom , :description , :image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
                    'nom' => $category->getNomCategory(),
					'description' => $category->getDescriptionCategory(),
					'image' => $category->getImageCategory()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		

      
    }