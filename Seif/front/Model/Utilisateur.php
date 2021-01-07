<?PHP
	class Utilisateur{
		private /*?int*/ $id = null;
		private /*?string*/ $nom = null;
		private /*?string*/ $prenom = null;
		private /*?string*/ $email = null;
		private /*?string*/ $age= null;
		private /*?string*/ $password = null;
		
		function __construct(string $nom, string $prenom, string $email, string $age, string $password){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->age=$age;
			$this->password=$password;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getAge(): string{
			return $this->age;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom;
		}
		function setAge(string $age): void{
			$this->age=$age;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}
	}
?>