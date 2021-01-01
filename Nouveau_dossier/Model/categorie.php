<?PHP
    class Category{
        private $id;
        private $nom;
        private $id_cat;
        

        public function __construct($nom,$id_cat){

            $this->nom=$nom;
            $this->id_cat=$id_cat;
            
        }

        function getId(){
            return $this->id;
        }

        function getNomCategory(){
            return $this->nom;
        }
        public function setNomCategory($nom){
             $this->nom=$nom;
        }

        function getIdCategory(){
            return $this->id_cat;
        }
        public function setIdCategory($id_cat){
             $this->id_cat=$id_cat;
        }
        
    }
?>
