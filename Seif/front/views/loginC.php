<?php

include 'config.php';


	
$errors=array();
				
$email="";
					
$password="";
				


				if(isset($_POST['login'])){

					$email=$_POST["email"];
      				$password=$_POST["password"];
     
                    if (empty($email)){
						$errors[]="merci d'enter votre email";
					}
					if (empty($password)){
						$errors[]="merci d'enter votre password";
					}/*
     			     if (!(isset($_POST['email']) && isset($_POST['password']))) 
						{
						$errors[]="S'il vous plaît veuillez verifier";
		                
						}*/
						
					
					if(empty($errors)) {

						
						
						$db=config::getConnexion();

						$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						
						

		                $query="SELECT * FROM client WHERE email='$email' and password = '$password'";
						
						
						
						$result =$db->query($query);
						
						
	
						$resultCheck =$result->fetch(PDO::FETCH_ASSOC);
					
						
						if ($resultCheck < 1) 
						{
	
							$errors[]="verifier votre email";
							
		
						}


						if(empty($errors)){
							session_start();
							$_SESSION['client_id'] = $resultCheck['id'];
							$_SESSION['client_identite'] = $resultCheck['prenom'].' '.$resultCheck['nom'];
							$_SESSION['client_email'] = $resultCheck['email'];
						}


							

							
	
				    }
		
        		}
		else{
		
			//header('location: /index.php');
	        } 
?>


<?php require_once(__DIR__."/../layout/top.php"); ?>

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
          
          <input name="email" class="btmspace-15" type="text" value="<?php echo $email; ?>" placeholder="Email">
          
          <input name="password" class="btmspace-15" type="password" value="">
         
          <button type="login" value="login" name="login">login</button>
          
        </fieldset>
      </form>
    </div>
  </fieldset>
</form>

</main>

</div>
<?php require_once(__DIR__."/../layout/bottom.php"); ?>
