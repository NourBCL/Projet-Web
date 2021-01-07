
<?php
include_once "config.php";

    $errors=array();


    $nom="";
    $prenom="";
    $email="";
    $age="";


    if(isset($_POST['submit'])){
     

     
      $nom=$_POST["nom"];
      $prenom=$_POST["prenom"];
      $email=$_POST["email"];
      $age=$_POST["age"];
      $password=$_POST["password"];
      $password_confirmation=$_POST["password_confirmation"];

      
      // Vérifications nécessaires et sollicitation BDD pour doRegister iciiiiiiiii
      if (empty($nom)){
        $errors[]="S'il vous plaît entrez votre nom";
      }
      if (empty($prenom)){
        $errors[]="S'il vous plaît entrez votre prenom";
      }
      if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[]="S'il vous plaît entrez votre adresse e-mail";
      } 
      if (empty($age)){
        $errors[]="S'il vous plaît entrez votre age";
      }
      if (empty($password)){
        $errors[]="S'il vous plaît entrez votre password";
      }
      if($password!=$password_confirmation)
      $errors[]="Les mots de passe ne sont pas identiques.";

      
      if (empty($errors))
      {
          $db=config::getConnexion();
        
          $query = $db->prepare("
            INSERT INTO client(nom,prenom, age, email, password)
            VALUES(:nom, :prenom, :age, :email, :password)");
          //$query->bindParam(':id',-1);
          $query->bindParam(':nom',$nom);
          $query->bindParam(':prenom',$prenom);
          $query->bindParam(':age',$age);
          $query->bindParam(':email',$email);
          $query->bindParam(':password',$password);
          $query->execute();

          header('location: /index.php');


      }

      // 1. Register done OK => redirect to success page
        //header('locationt: localhost/pages');
        

      
      
    
  }
    
     
?>

<?php require_once(__DIR__."/style/layout/top.php"); ?>

<div class="wrapper">
<main class="hoc container clear"> 

<form method="post" >

  <ul class="errors">
    <?php foreach ($errors as $error) { ?>
      <li><?php echo $error; ?></li>
    <?php } ?>
  </ul>

  <fieldset>
  <footer id="footer" class="hoc clear"> 
  <div class="P.blocktext">
      <p class="nospace btmspace-15"></p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input name="nom" class="btmspace-15" type="text" value="<?php echo $nom; ?>" placeholder="Nom">
          <input name="prenom" class="btmspace-15" type="text" value="<?php echo $prenom; ?>" placeholder="Prénom">
          <input name="email" class="btmspace-15" type="text" value="<?php echo $email; ?>" placeholder="Email">
          <input name="age" class="btmspace-15" type="number" value="<?php echo $age; ?>" placeholder="Age">
          <input name="password" class="btmspace-15" type="password" value="">
          <input name="password_confirmation" class="btmspace-15" type="password" value="" >
          <button type="submit" value="submit" name="submit">Submit</button>
          
        </fieldset>
      </form>
    </div>
  </fieldset>
</form>

</main>

</div>


<?php require_once(__DIR__."/style/layout/bottom.php"); ?>
