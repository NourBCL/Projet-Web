<?php
include "../controller/UtilisateurC.php";
include_once "../model/Utilisateur.php";
  session_start();
  
  $utilisateurC = new UtilisateurC();

  $error = "";
  
  if(isset($_POST['Modifier'])){
    
        if (
		isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["age"]) && 
        isset($_POST["password"])
	){ 
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["age"]) && 
            !empty($_POST["password"])
        ) {
            
            $user = new Utilisateur(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['age'],
                $_POST['password']
            );
            
            
			
            $utilisateurC->modifierUtilisateur($user, $_SESSION['client_id']);
            header('location: /index.php');
        }
        else
            $error = "Missing information";
	}
  
    }
if(isset($_POST['Supprimer'])){
    
   
        $utilisateurC->supprimerUtilisateur($_SESSION['client_id']);
        session_destroy() ;
		header('location: /index.php');
	
}

?>

<?php require_once(__DIR__."/../layout/top.php"); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div id="error">
            <?php echo $error; ?>
        </div>
<div class="container emp-profile">
<?php
			/*if (isset($_GET['id'])){
				$user = $utilisateurC->recupererUtilisateur($_GET['id']);
            */	
            $user = $utilisateurC->recupererUtilisateur($_SESSION['client_id']);

            //var_dump($user);die();
		?>
            <form method="post">
                <div class="row">
                
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $_SESSION['client_identite'];  ?>
                                    </h5>
                                  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <button type="submit" class="profile-edit-btn" value="Modifier" name="Modifier">Modifier</button>
                    </div>
                    <div class="col-md-2">
                    <button type="submit" class="profile-edit-btn" value="Supprimer" name="Supprimer">Supprimer</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                       
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label for="id">Id:
                                            </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="text" name="id" id="id"  value = "<?php echo $user['id']; ?>" disabled></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label for="nom">Nom:
						                    </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $user['nom']; ?>"> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label for="prenom">Prenom:
						                    </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="text" name="prenom" id="prenom" maxlength="20" value = "<?php echo $user['prenom']; ?>"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label for="email">Email:
						                    </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="email" name="email" id="email" value = "<?php echo $user['email']; ?>"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label for="age">Age:
						                    </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="text" name="age" id="age" value = "<?php echo $user['age']; ?>"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label for="password">Password:
						                    </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="password" name="password" id="pass" value = "<?php echo $user['password']; ?>"></p>
                                            </div>
                                        </div>
                                        
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <?php
		//}
		?>