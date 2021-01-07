<?PHP
	include "config.php";
	require_once '../model/Utilisateur.php';

	class UtilisateurC {
		
		function ajouterUtilisateur($Utilisateur){
			$sql="INSERT INTO client (nom, prenom, email, age, password) 
			VALUES (:nom,:prenom,:email, :age, :password)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prenom' => $Utilisateur->getPrenom(),
					'email' => $Utilisateur->getEmail(),
					'age' => $Utilisateur->getAge(),
					'password' => $Utilisateur->getPassword()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherUtilisateurs(){
			
			$sql="SELECT * FROM client";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerUtilisateur($id){
			$sql="DELETE FROM client WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierUtilisateur($Utilisateur, $id){

			var_dump($Utilisateur);
			var_dump($id);
			

			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						age = :age,
						password = :password
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prenom' => $Utilisateur->getPrenom(),
					'email' => $Utilisateur->getEmail(),
					'age' => $Utilisateur->getAge(),
					'password' => $Utilisateur->getPassword(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";

				
			} catch (PDOException $e) {				
				$e->getMessage();
			}
		}
		function recupererUtilisateur($id){
			$sql="SELECT * from client where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererUtilisateur1($id){
			$sql="SELECT * from client where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>